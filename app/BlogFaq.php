<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogFaq extends Model
{
    protected $table = 'blogfaqs';

    protected $fillable = [
        'blog_id',
        'question',
        'answer',
        'order',
        'status',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
