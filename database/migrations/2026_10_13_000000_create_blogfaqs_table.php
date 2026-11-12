<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogfaqsTable extends Migration
{
    public function up()
    {
        Schema::create('blogfaqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('blog_id');
            $table->text('question');
            $table->longText('answer');
            $table->integer('order')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogfaqs');
    }
}
