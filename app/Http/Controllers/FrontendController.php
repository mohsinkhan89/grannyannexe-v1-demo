<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Service;
use App\Faq;
use App\Jobs\ContactJob;
use App\Contact;
use App\Team;
use App\ContentPage;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Str;

class FrontendController extends Controller
{
    private function getContentPages()
    {
        return ContentPage::where('status', 1)->get();
    }
    private function getBlogs()
    {
        return Blog::where('status', 1)
		    ->orderBy('id', 'desc')
		    ->get();
    }
    private function getServices()
    {
        return Service::where('status', 1)->get();
    }
    private function getStudioBuilds()
    {
        return [
            [
                'title' => 'The Garden Studio',
                'size' => '5.5m x 4m',
                'price' => 'FROM &pound;67,000 TURNKEY',
                'route' => 'theGardenStudio',
                'image' => 'frontend/assets/img/garden-living/studio-external.png',
                'description' => 'A compact open-plan annexe designed for comfortable independent living with a complete turnkey finish.',
            ],
            [
                'title' => 'The Ashbourne',
                'size' => '9m x 4m',
                'price' => 'FROM &pound;88,350 TURNKEY',
                'route' => 'theGardenStudioBadroom9x',
                'image' => 'frontend/assets/img/garden-living/badroom-9x/studio-external.png',
                'description' => 'A spacious one-bedroom layout with generous living space, modern glazing and a refined residential feel.',
            ],
            [
                'title' => 'The Willow Lodge',
                'size' => '8m x 4m',
                'price' => 'FROM &pound;83,125 TURNKEY',
                'route' => 'theGardenStudioBadroom8x',
                'image' => 'frontend/assets/img/garden-living/badroom-8x/studio-external.png',
                'description' => 'A balanced one-bedroom annexe with a practical footprint, privacy and year-round comfort built in.',
            ],
            [
                'title' => 'The Garden Retreat',
                'size' => '6.5m x 6.5m',
                'price' => 'FROM &pound;93,700 TURNKEY',
                'route' => 'theGardenStudioBadroomGardenRetreat',
                'image' => 'frontend/assets/img/garden-living/badroom-6x/studio-external.png',
                'description' => 'A larger garden annexe made for long-term family living, with extra space and a calm contemporary finish.',
            ],
        ];
    }
    public function index()
    {
        $view = 'frontend.index';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $Teams = Team::where('status', 1)->get();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','Teams','contentpages'));
    }

    public function about()
    {
        $view = 'frontend.about';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function testimonials()
    {
        $view = 'frontend.testimonials';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs', 'services', 'contentpages'));
    }

    public function process()
    {
        $view = 'frontend.process';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function service()
    {
        $view = 'frontend.services';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function servicedetail($slug)
    {
        $view = 'frontend.servicedetail';
        $serviceDetails = Service::where('slug', $slug)->first();
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','serviceDetails','contentpages'));
    }

    public function price()
    {
        $view = 'frontend.prices';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function gallery()
    {
        $view = 'frontend.gallery';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function faq()
    {
        $view = 'frontend.faqs';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function teamDetails()
    {
        $view = 'frontend.team-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $Teams = Team::where('status', 1)->get();
        return view($view, compact('blogs','services','Teams','contentpages'));
    }

    public function londonDetails()
    {
        $view = 'frontend.london-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function manchesterDetails()
    {
        $view = 'frontend.manchester-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function birminghamDetails()
    {
        $view = 'frontend.birmingham-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function nottinghamDetails()
    {
        $view = 'frontend.nottingham-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function coventryDetails()
    {
        $view = 'frontend.coventry-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function derbyDetails()
    {
        $view = 'frontend.derby-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function leicesterDetails()
    {
        $view = 'frontend.leicester-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function tamworthDetails()
    {
        $view = 'frontend.tamworth-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function worcesterDetails()
    {
        $view = 'frontend.worcester-details';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function theStudio()
    {
        $view = 'frontend.the-studio';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $studioBuilds = $this->getStudioBuilds();
        return view($view, compact('blogs','services','contentpages','studioBuilds'));
    }

    public function theGardenStudio()
    {
        $view = 'frontend.the-garden-studio';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function accessibleGardenAnnexes()
    {
        $view = 'frontend.accessible-garden-annexes';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function theGardenStudioBadroom()
    {
        $view = 'frontend.the-studio-badroom-one-fivem';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function theGardenStudioBadroom9x()
    {
        $view = 'frontend.the-studio-badroom-one-ninem';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function theGardenStudioBadroom8x()
    {
        $view = 'frontend.the-studio-badroom-one-eightm';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }
    public function theGardenStudioBadroomGardenRetreat()
    {
        $view = 'frontend.the-studio-bedroom-graden-retreat';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function theForeverLodge()
    {
        $view = 'frontend.the-forever-lodge';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function theGrandLodge()
    {
        $view = 'frontend.the-grand-lodge';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }

    public function theGrandHaven()
    {
        $view = 'frontend.the-garden-haven';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs','contentpages'));
    }


    public function blogs()
    {
        $view = 'frontend.blog';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services','contentpages'));
    }

    public function blogDeails($slug)
    {
        $view = 'frontend.blogdetail';
        $blogDetail = Blog::with('faqs')->where('slug', $slug)->firstOrFail();
        $popularblogs = Blog::where('status',1)->where('id','!=', $blogDetail->id)->inRandomOrder()->take(4)->get();
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','blogDetail','popularblogs','services','contentpages'));
    }

    public function contact()
    {
        $view = 'frontend.contact';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return response()->view($view, compact('blogs','services', 'contentpages'))
            ->header('Cache-Control', 'no-store, private');
    }

    public function paymentmilestone()
    {
        $view = 'frontend.milestone';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs','services', 'contentpages'));
    }

    public function ContentPages($slug)
    {
        $view = 'frontend.content-page';
        $ContentPageDetails = ContentPage::where('slug', $slug)->firstOrFail();
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view($view, compact('blogs', 'services', 'ContentPageDetails', 'contentpages'));
    }

    public function contactToken()
    {
        return response()->json(['token' => csrf_token()])
            ->header('Cache-Control', 'no-store, private');
    }

    public function contactSubmit(request $request)
    {
        foreach (['first_name', 'last_name', 'email', 'message'] as $field) {
            if (is_string($request->input($field))) {
                $request->merge([$field => trim($request->input($field))]);
            }
        }

        // Normalize UK national and international notation before validation.
        if (is_string($request->input('phone'))) {
            $phone = preg_replace('/[\s()-]+/', '', trim($request->input('phone')));
            if (strpos($phone, '0044') === 0) {
                $phone = '+44'.substr($phone, 4);
            } elseif (strpos($phone, '44') === 0) {
                $phone = '+'.$phone;
            } elseif (strpos($phone, '0') === 0) {
                $phone = '+44'.substr($phone, 1);
            } elseif (preg_match('/^[1-9][0-9]*$/D', $phone)) {
                $phone = '+44'.$phone;
            }
            $phone = preg_replace('/^\+440/', '+44', $phone);
            $request->merge(['phone' => $phone]);
        }

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:120', 'regex:/^(?=.*\p{L})[\p{L}\p{M} \x{0027}\x{2019}.\-]+$/u'],
            'last_name' => ['required', 'string', 'max:120', 'regex:/^(?=.*\p{L})[\p{L}\p{M} \x{0027}\x{2019}.\-]+$/u'],
            'email' => 'required|email|max:255',
            'phone' => ['required', 'string', 'regex:/^\+44(?:1[0-9]{8,9}|[235789][0-9]{9}|800[0-9]{6}|8001111)$/D'],
            'postcode' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:10000',
        ], [
            'first_name.regex' => 'Please enter a valid first name.',
            'last_name.regex' => 'Please enter a valid last name.',
            'phone.regex' => 'Please enter a UK phone number, for example 07700 900123 or +44 7700 900123.',
        ]);
        $data = new Contact();
        $data->name = trim($validated['first_name'].' '.($validated['last_name'] ?? ''));
        $data->email = $validated['email'];
        $data->phone = $validated['phone'];
        $data->postcode = $validated['postcode'] ?? '';
        $data->project_type = '';
        $data->message = $validated['message'] ?? '';
        $data->save();

        try {
            dispatch(new ContactJob($data->id, $data->email, 'contactuser'));
            foreach (explode(',', (string) setting('site.Notification_Email')) as $email) {
                $email = trim($email);
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    dispatch(new ContactJob($data->id, $email, 'admin'));
                }
            }
        } catch (\Throwable $exception) {
            // The enquiry is saved even if notification delivery fails.
            report($exception);
        }
        $redirect = route('thankyouPage', Str::random(32));
        if ($request->expectsJson()) {
            return response()->json(['status' => 'success', 'message' => "Thank you, we'll be in touch soon.", 'redirect' => $redirect]);
        }
        return redirect()->to($redirect);
    }

    public function accessibleContactSubmit(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', 'string'],
        ], [
            'g-recaptcha-response.required' => 'Please confirm that you are not a robot.',
        ]);

        try {
            $captcha = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);
        } catch (\Throwable $exception) {
            report($exception);
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Captcha verification is temporarily unavailable. Please try again.',
            ]);
        }

        if (!$captcha->successful() || !$captcha->json('success')) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Captcha verification failed. Please try again.',
            ]);
        }

        return $this->contactSubmit($request);
    }

    public function thankyouPage()
    {
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $contentpages = $this->getContentPages();
        return view('frontend.contact-thankyou', compact('blogs', 'services','contentpages'));
    }
}

