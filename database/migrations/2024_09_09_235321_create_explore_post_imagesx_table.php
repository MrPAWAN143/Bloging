<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExplorePostImagesxTable extends Migration
{
    public function up()
    {
        Schema::create('explore_post_imagesx', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('explore_more_id');
            $table->string('image_path');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('explore_more_id')->references('id')->on('explore_morex')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('explore_post_imagesx');
    }
}
