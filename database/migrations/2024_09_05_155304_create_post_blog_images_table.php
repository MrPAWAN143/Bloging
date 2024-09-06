<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('post_blog_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_blog_id');
            $table->string('image_path');
            $table->timestamps();
    
            $table->foreign('post_blog_id')->references('id')->on('post_blogs')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_blog_images');
    }
};
