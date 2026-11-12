<?php

namespace Database\Seeders;

use App\Blog;
use App\BlogFaq;
use Illuminate\Database\Seeder;

class BlogFaqsTableSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/blogfaqs.json');
        $faqs = json_decode($json, true) ?: [];

        foreach ($faqs as $faq) {
            $blog = Blog::where('slug', $faq['slug'])->first();
            if (!$blog) {
                continue;
            }

            BlogFaq::updateOrCreate([
                'blog_id' => $blog->id,
                'question' => $faq['question'],
            ], [
                'answer' => $faq['answer'],
                'order' => $faq['order'],
                'status' => 1,
            ]);
        }
    }
}
