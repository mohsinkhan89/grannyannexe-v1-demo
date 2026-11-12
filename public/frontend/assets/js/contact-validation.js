(function () {
    'use strict';
    var form = document.querySelector('.anx-contact-form');
    if (!form) return;
    var phone = form.elements.phone;
    // Use inline errors after JavaScript loads; retain native validation without JS.
    form.noValidate = true;
    function normalize(value) {
        var compact = value.trim().replace(/[\s()-]/g, '');
        if (compact.indexOf('0044') === 0) compact = '+44' + compact.slice(4);
        else if (compact.indexOf('44') === 0) compact = '+' + compact;
        else if (compact.indexOf('0') === 0) compact = '+44' + compact.slice(1);
        else if (/^[1-9][0-9]*$/.test(compact)) compact = '+44' + compact;
        return compact.replace(/^\+440/, '+44');
    }
    function mask() {
        var original = phone.value;
        var position = phone.selectionStart;
        var compact = original.replace(/[\s()-]/g, '');
        // Keep a partially typed international prefix intact.
        if (['', '+', '+4', '0', '00', '004', '4', '44'].indexOf(compact) !== -1) return;
        var value = normalize(compact);
        // Keep foreign numbers visible for validation instead of changing their country.
        if (!/^\+44\d{0,10}$/.test(value)) return;
        var digits = value.slice(3);
        var groups;
        if (/^2/.test(digits)) groups = [2, 4, 4];
        else if (/^1(?:1|\d1)/.test(digits)) groups = [3, 3, 4];
        else if (/^16977/.test(digits)) groups = [5, 5];
        else if (/^1/.test(digits)) groups = [4, 6];
        else if (/^7/.test(digits)) groups = [4, 6];
        else groups = [3, 3, 4];
        var parts = [];
        var offset = 0;
        groups.forEach(function (size) {
            if (offset < digits.length) parts.push(digits.slice(offset, offset + size));
            offset += size;
        });
        // Display the number in national notation without a country code.

        var formatted = '0' + parts.join(' ');
        phone.value = formatted;
        if (document.activeElement === phone && position !== null) {
            var caret = position === original.length ? formatted.length :
                Math.max(0, position + formatted.length - original.length);
            phone.setSelectionRange(caret, caret);
        }
    }
    function validate(field) {
        field.setCustomValidity('');
        if (field.required && !field.value.trim()) {
            field.setCustomValidity('Please complete this field.');
        }
        if (field.name === 'first_name' || field.name === 'last_name') {
            if (field.value && (!/\p{L}/u.test(field.value) || !/^[\p{L}\p{M} \u0027\u2019.\-]+$/u.test(field.value))) {
                field.setCustomValidity('Please enter a valid name.');
            }
        }
        if (field === phone && field.value && !/^\+44(?:1[0-9]{8,9}|[235789][0-9]{9}|800[0-9]{6}|8001111)$/.test(normalize(field.value))) {
            field.setCustomValidity('Please enter a valid phone number, for example 07700 900123.');
        }
        var id = 'error-' + field.name;
        var error = document.getElementById(id);
        if (!error) {
            error = document.createElement('span');
            error.id = id;
            error.className = 'anx-contact-error';
            error.setAttribute('aria-live', 'polite');
            field.insertAdjacentElement('afterend', error);
        }
        error.textContent = field.validationMessage;
        field.setAttribute('aria-invalid', String(!field.validity.valid));
        field.setAttribute('aria-describedby', id);
        return field.validity.valid;
    }
    phone.addEventListener('input', mask);
    mask();
    Array.prototype.forEach.call(form.querySelectorAll('input:not([type="hidden"]), textarea'), function (field) {
        field.addEventListener('blur', function () {
            field.value = field.value.trim();
            validate(field);
        });
        field.addEventListener('input', function () {
            if (field.getAttribute('aria-invalid') === 'true') validate(field);
        });
        field.addEventListener('invalid', function () { validate(field); });
    });
    var submitting = false;
    var button = form.querySelector('button[type="submit"]');
    var originalButton = button.innerHTML;
    function resetButton() {
        submitting = false;
        button.disabled = false;
        button.removeAttribute('aria-busy');
        button.innerHTML = originalButton;
    }
    // Restore the button when returning from the thank-you page with browser Back.
    window.addEventListener('pageshow', resetButton);
    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        if (submitting) return;
        var valid = true;
        Array.prototype.forEach.call(form.querySelectorAll('input:not([type="hidden"]), textarea'), function (field) {
            if (!validate(field)) valid = false;
        });
        if (!valid) {
            event.preventDefault();
            form.querySelector('[aria-invalid="true"]').focus();
            return;
        }
        var captchaError = document.getElementById('captcha-client-error');
        if (typeof grecaptcha === 'undefined' || !grecaptcha.getResponse()) {
            captchaError.textContent = 'Please confirm that you are not a robot.';
            return;
        }
        captchaError.textContent = '';
        submitting = true;
        button.disabled = true;
        button.setAttribute('aria-busy', 'true');
        button.innerHTML = '<span class="text" role="status">Please wait</span><span style="display: inline-flex; align-items: center; margin-left: 12px;"><i class="fa-solid fa-spinner fa-spin" aria-hidden="true"></i></span><span class="shape"></span>';
        var submitError = form.querySelector('.anx-contact-submit-error');
        if (submitError) submitError.remove();
        try {
            // Renew an expired session before posting a form left open or cached.
            var response = await fetch(form.dataset.csrfUrl, {
                credentials: 'same-origin',
                cache: 'no-store',
                headers: { 'Accept': 'application/json' }
            });
            if (!response.ok) throw new Error('Token refresh failed');
            var data = await response.json();
            if (typeof data.token !== 'string' || !data.token) throw new Error('Missing token');
            form.elements._token.value = data.token;
            var submission = await fetch(form.action, {
                method: 'POST',
                credentials: 'same-origin',
                headers: { 'Accept': 'application/json' },
                body: new FormData(form)
            });
            var result = await submission.json();
            if (!submission.ok) {
                if (submission.status === 422 && result.errors) {
                    Object.keys(result.errors).forEach(function (name) {
                        if (name === 'g-recaptcha-response') {
                            captchaError.textContent = result.errors[name][0];
                            if (typeof grecaptcha !== 'undefined') grecaptcha.reset();
                            return;
                        }
                        var field = form.elements.namedItem(name);
                        if (!field) return;
                        validate(field);
                        document.getElementById('error-' + name).textContent = result.errors[name][0];
                        field.setAttribute('aria-invalid', 'true');
                    });
                    var invalid = form.querySelector('[aria-invalid="true"]');
                    if (invalid) invalid.focus();
                    return;
                }
                throw new Error('Submission failed');
            }
            if (result.status !== 'success' || !result.redirect) throw new Error('Unexpected response');
            resetButton();
            window.location.assign(result.redirect);
        } catch (error) {
            submitError = document.createElement('p');
            submitError.className = 'anx-contact-error anx-contact-submit-error';
            submitError.setAttribute('role', 'alert');
            submitError.textContent = 'Unable to send right now. Please check your connection and try again. Your details are still here.';
            form.querySelector('.anx-contact-actions').insertAdjacentElement('beforebegin', submitError);
        } finally {
            resetButton();
        }
    });
}());
