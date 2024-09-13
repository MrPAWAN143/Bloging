<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedPostImagesxTable extends Migration
{
    public function up()
    {
        Schema::create('featured_post_imagesx', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('featured_blog_id');
            $table->string('image_path');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('featured_blog_id')->references('id')->on('featured_blogsx')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('featured_post_imagesx');
    }
}
