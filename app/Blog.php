<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Slug;

class Blog extends Model
{
    use Slug;

    public function faqs()
    {
        return $this->hasMany(BlogFaq::class)->where('status', 1)->orderBy('order');
    }
}
