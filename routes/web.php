<?php

use App\Http\Controllers\FrontendController;
use App\Blog;
use App\ContentPage;
use App\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [FrontendController::class , 'index'])->name('index');
Route::get("/about-us", [FrontendController::class , 'about'])->name('about');
Route::get("/our-process", [FrontendController::class , 'process'])->name('process');
Route::get("/services", [FrontendController::class , 'service'])->name('service');
Route::get("/prices", [FrontendController::class , 'price'])->name('price');
Route::get("/gallery", [FrontendController::class , 'gallery'])->name('gallery');
Route::get("/client-testimonials", [FrontendController::class , 'testimonials'])->name('testimonials');
Route::get("/client-testimonials/{slug}", [FrontendController::class , 'testimonialDetail'])->name('testimonialDetail');
Route::get("/blog", [FrontendController::class , 'blogs'])->name('blogs');
Route::get("/faq", [FrontendController::class , 'faq'])->name('faq');
Route::get("/payment-milestone", [FrontendController::class , 'paymentmilestone'])->name('paymentmilestone');
Route::get("/contact-us", [FrontendController::class , 'contact'])->name('contact');
Route::get("/contact/token", [FrontendController::class, 'contactToken'])->name('contactToken');
Route::post("/contact/submit", [FrontendController::class , 'contactSubmit'])->name('contactSubmit');
Route::post("/accessible-garden-annexes/contact/submit", [FrontendController::class, 'accessibleContactSubmit'])->name('accessibleContactSubmit');

Route::get("/team-details", [FrontendController::class , 'teamDetails'])->name('teamDetails');
Route::get("/london", [FrontendController::class , 'londonDetails'])->name('londonDetails');
Route::get("/manchester", [FrontendController::class , 'manchesterDetails'])->name('manchesterDetails');
Route::get("/birmingham", [FrontendController::class , 'birminghamDetails'])->name('birminghamDetails');
Route::get("/nottingham", [FrontendController::class , 'nottinghamDetails'])->name('nottinghamDetails');
Route::get("/coventry", [FrontendController::class , 'coventryDetails'])->name('coventryDetails');
Route::get("/derby", [FrontendController::class , 'derbyDetails'])->name('derbyDetails');
Route::get("/leicester", [FrontendController::class , 'leicesterDetails'])->name('leicesterDetails');
Route::get("/tamworth", [FrontendController::class , 'tamworthDetails'])->name('tamworthDetails');
Route::get("/worcester", [FrontendController::class , 'worcesterDetails'])->name('worcesterDetails');
Route::get("/the-studio", [FrontendController::class , 'theStudio'])->name('theStudio');
Route::get("/the-garden-studio", [FrontendController::class , 'theGardenStudio'])->name('theGardenStudio');
Route::get("/accessible-garden-annexes", [FrontendController::class , 'accessibleGardenAnnexes'])->name('accessibleGardenAnnexes');
// Route::get("/the-garden-studio-badroom-one-fivem", [FrontendController::class , 'theGardenStudioBadroom'])->name('theGardenStudioBadroom');
Route::get("/oak-lodge", [FrontendController::class , 'theGardenStudioBadroom9x'])->name('theGardenStudioBadroom9x');
Route::get("/the-willow-lodge", [FrontendController::class , 'theGardenStudioBadroom8x'])->name('theGardenStudioBadroom8x');
Route::get("/the-garden-retreat", [FrontendController::class , 'theGardenStudioBadroomGardenRetreat'])->name('theGardenStudioBadroomGardenRetreat');
Route::get("/the-forever-lodge", [FrontendController::class , 'theForeverLodge'])->name('theForeverLodge');
Route::get("/the-grand-lodge", [FrontendController::class , 'theGrandLodge'])->name('theGrandLodge');
Route::get("/the-garden-haven", [FrontendController::class , 'theGrandHaven'])->name('theGrandHaven');


Route::get("/thank-you/{refkey}", [FrontendController::class , 'thankyouPage'])->name('thankyouPage');
Route::get("/blog/{slug}", [FrontendController::class , 'blogDeails'])->name('blogDeails');
Route::get("/service/{slug}", [FrontendController::class , 'servicedetail'])->name('servicedetail');

// Route::group(['middleware' => 'instaload'], function () {
//     Route::group(['prefix' => 'dashboard'], function () {
//         Route::get("/home", [BackEndController::class , 'dashboard'])->name('dashboard');
//         Route::get("/users/{refkey}", [BackEndController::class , 'users'])->name('users');
//         Route::get("/check", [BackEndController::class , 'check_username'])->name('check_username');
//         Route::post("/user/submit", [BackEndController::class , 'user_submit'])->name('user_submit');
//         Route::post("/add-credit", [BackEndController::class , 'add_credit'])->name('add_credit');
//         Route::post("/refund-credit", [BackEndController::class , 'refund_credit'])->name('refund_credit');
//         Route::get("/reports/{refkey}", [BackEndController::class , 'reports'])->name('reports');
//         Route::get("/all-reports/{refkey}", [BackEndController::class , 'all_reports'])->name('all_reports');
//         Route::get("/plans", [BackEndController::class , 'plans'])->name('plans');
//         Route::get("/bank", [BackEndController::class , 'bank'])->name('bank');
//         Route::get("/bank-districts/{id}", [BackEndController::class , 'bank_districts'])->name('bank_districts');
//         Route::get("/bank-branches/{id}", [BackEndController::class , 'bank_branches'])->name('bank_branches');
//         Route::post("/bank-request-submit", [BackEndController::class , 'bank_request_submit'])->name('bank_request_submit');
//         Route::post("/bank-request-update", [BackEndController::class , 'ban_request_update'])->name('ban_request_update');
//         Route::get("/requests/{refkey}", [BackEndController::class , 'requests'])->name('requests');
//         Route::get("/mobile-banking", [BackEndController::class , 'mobile_banking'])->name('mobile_banking');
//         Route::post("/mobile-banking-submit", [BackEndController::class , 'mobile_banking_submit'])->name('mobile_banking_submit');
//         Route::post("/add-partner-submit", [BackEndController::class , 'add_partner_submit'])->name('add_partner_submit');
//         Route::get("/mobile-banking-request/{refkey}", [BackEndController::class , 'mobile_banking_request'])->name('mobile_banking_request');
//         Route::post("/mobile-banking-request-update", [BackEndController::class , 'mobile_banking_request_update'])->name('mobile_banking_request_update');
//         Route::get("/mobile-recharge", [BackEndController::class , 'mobile_recharge'])->name('mobile_recharge');
//         Route::post("/mobile-recharge-submit", [BackEndController::class , 'mobile_recharge_submit'])->name('mobile_recharge_submit');
//         Route::get("/mobile-recharge/request/{refkey}", [BackEndController::class , 'mobile_recharge_request'])->name('mobile_recharge_request');
//         Route::post("/mobile-recharge-request-update", [BackEndController::class , 'mobile_recharge_request_update'])->name('mobile_recharge_request_update');
//         Route::get("/profile", [BackEndController::class , 'profile'])->name('profile');
//         Route::post("/profile-update-submit", [BackEndController::class , 'profile_update_submit'])->name('profile_update_submit');
//         Route::get("/find-operator/{id}", [BackEndController::class , 'find_operator'])->name('find_operator');
//         Route::post("/create-pin", [BackEndController::class , 'create_pin'])->name('create_pin');
//         Route::post("/reset-pin-submit", [BackEndController::class , 'reset_pin_submit'])->name('reset_pin_submit');
//         Route::post("/request-credit", [BackEndController::class , 'request_credit'])->name('request_credit');
//         Route::get("/credit-request/{refkey}", [BackEndController::class , 'credit_request'])->name('credit_request');
//         Route::post("/credit-request-update", [BackEndController::class , 'credit_request_update'])->name('credit_request_update');
//         Route::get("/deactive-account/{userid}", [BackEndController::class , 'deactive_account'])->name('deactive_account');
//         Route::get("/active-account/{userid}", [BackEndController::class , 'active_account'])->name('active_account');
//         Route::get("/logout", [BackEndController::class , 'logout'])->name('logout');
//     });
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/sitemap.xml', function () {
    // Automatically include every public, parameter-free frontend route.
    $pages = collect(Route::getRoutes()->getRoutes())
        ->filter(function ($route) {
            $action = $route->getActionName();

            return in_array('GET', $route->methods(), true)
                && strpos($action, FrontendController::class . '@') === 0
                && strpos($route->uri(), '{') === false;
        })
        ->map(function ($route) {
            return [
                'loc' => url($route->uri()),
                'lastmod' => null,
                'priority' => $route->uri() === '/' ? '1.0' : '0.8',
            ];
        });

    $blogs = Blog::where('status', 1)->get()->map(function ($blog) {
        return [
            'loc' => route('blogDeails', $blog->slug),
            'lastmod' => $blog->updated_at,
            'priority' => '0.7',
        ];
    });

    $services = Service::where('status', 1)->get()->map(function ($service) {
        return [
            'loc' => route('servicedetail', $service->slug),
            'lastmod' => $service->updated_at,
            'priority' => '0.8',
        ];
    });

    $contentPages = ContentPage::where('status', 1)->get()->map(function ($page) {
        return [
            'loc' => route('ContentPages', $page->slug),
            'lastmod' => $page->updated_at,
            'priority' => '0.8',
        ];
    });

    $urls = $pages->concat($blogs)->concat($services)->concat($contentPages)->unique('loc')->values();
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

    foreach ($urls as $url) {
        $xml .= "  <url>\n";
        $xml .= '    <loc>' . e($url['loc']) . "</loc>\n";

        if ($url['lastmod']) {
            $xml .= '    <lastmod>' . $url['lastmod']->toAtomString() . "</lastmod>\n";
        }

        $xml .= '    <priority>' . $url['priority'] . "</priority>\n";
        $xml .= "  </url>\n";
    }

    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/llms.txt', function () {
    $clean = function ($value) {
        return trim(preg_replace('/\s+/u', ' ', strip_tags((string) $value)));
    };

    $link = function ($title, $url, $description = null) use ($clean) {
        $title = str_replace(['[', ']'], '', $clean($title));
        $description = $clean($description);

        return '[' . $title . '](' . $url . ')' . ($description !== '' ? ': ' . $description : '');
    };

    // Automatically include every public, parameter-free frontend route.
    $pages = collect(Route::getRoutes()->getRoutes())
        ->filter(function ($route) {
            $action = $route->getActionName();

            return in_array('GET', $route->methods(), true)
                && strpos($action, FrontendController::class . '@') === 0
                && strpos($route->uri(), '{') === false;
        })
        ->map(function ($route) use ($link) {
            $uri = $route->uri();
            $title = $uri === '/' ? 'Home' : Str::headline($uri);

            return $link($title, url($uri));
        })
        ->unique()
        ->values();

    $blogs = Blog::where('status', 1)->get()->map(function ($blog) use ($link) {
        return $link(
            $blog->meta_title ?: $blog->title,
            route('blogDeails', $blog->slug),
            $blog->meta_description ?: $blog->short_description
        );
    });

    $services = Service::where('status', 1)->get()->map(function ($service) use ($link) {
        return $link(
            $service->meta_title ?: $service->title,
            route('servicedetail', $service->slug),
            $service->meta_description ?: $service->short_description
        );
    });

    $contentPages = ContentPage::where('status', 1)->get()->map(function ($page) use ($link) {
        return $link(
            $page->meta_title ?: $page->title,
            route('ContentPages', $page->slug),
            $page->meta_description
        );
    });

    $sections = collect([
        'Pages' => $pages,
        'Blog Posts' => $blogs,
        'Services' => $services,
        'Content Pages' => $contentPages,
    ])->filter(function ($items) {
        return $items->isNotEmpty();
    })->map(function ($items, $heading) {
        return '## ' . $heading . PHP_EOL . PHP_EOL . $items->implode(PHP_EOL);
    })->implode(PHP_EOL . PHP_EOL);

    $host = parse_url(url('/'), PHP_URL_HOST);
    $content = '# ' . $host . PHP_EOL . PHP_EOL
        . '> Public pages and resources available on ' . $host . '.' . PHP_EOL . PHP_EOL
        . $sections . PHP_EOL;

    return response($content, 200)->header('Content-Type', 'text/plain; charset=UTF-8');
})->name('llms');

Route::get('/{slug?}', [FrontendController::class, 'ContentPages'])
    ->name('ContentPages');

