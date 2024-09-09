<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PostBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'slug',
        'meta_title',
        'meta_description',
        'keyword',
        'category_id', // Ensure this is fillable
        'description',
    ];

    // Relation to categories
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

      // Define the relationship to post_blog_images
     
      public function images()
      {
          return $this->hasMany(PostBlogImage::class, 'post_blog_id');
      }
}


