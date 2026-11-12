<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ContactCsrfTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Exercise real CSRF verification, which Laravel normally skips in tests.
        $this->app->instance('env', 'local');
    }

    public function test_fresh_token_replaces_an_expired_contact_session_token()
    {
        $this->withSession(['_token' => 'current-session-token']);
        $this->postJson(route('contactSubmit'), ['_token' => 'expired-token'])
            ->assertStatus(419);

        $response = $this->getJson(route('contactToken'));
        $response->assertOk()->assertJsonStructure(['token']);
        $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
        $token = $response->json('token');
        $this->assertSame(session()->token(), $token);

        // Invalid fields should reach validation without saving or emailing an enquiry.
        $this->postJson(route('contactSubmit'), ['_token' => $token])
            ->assertStatus(422)->assertJsonValidationErrors(['first_name', 'last_name', 'email', 'phone']);
    }

    public function test_contact_submission_still_requires_a_csrf_token()
    {
        $this->postJson(route('contactSubmit'), [])->assertStatus(419);
    }

    public function test_accessible_contact_submission_requires_a_captcha_token()
    {
        $this->withSession(['_token' => 'current-session-token']);

        $this->postJson(route('accessibleContactSubmit'), [
            '_token' => 'current-session-token',
        ])->assertStatus(422)->assertJsonValidationErrors(['g-recaptcha-response']);
    }

    public function test_accessible_contact_submission_rejects_an_invalid_captcha()
    {
        Http::fake([
            'www.google.com/recaptcha/api/siteverify' => Http::response(['success' => false], 200),
        ]);
        $this->withSession(['_token' => 'current-session-token']);

        $this->postJson(route('accessibleContactSubmit'), [
            '_token' => 'current-session-token',
            'g-recaptcha-response' => 'invalid-token',
        ])->assertStatus(422)->assertJsonValidationErrors(['g-recaptcha-response']);

        Http::assertSent(function ($request) {
            return $request['response'] === 'invalid-token'
                && $request['secret'] === config('services.recaptcha.secret_key');
        });
    }
}
