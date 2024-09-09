<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Specify the table if it does not follow Laravel's naming convention
    protected $table = 'categories';

    // Specify which fields are mass assignable
    protected $fillable = ['name', 'slug', 'meta_title', 'meta_description', 'keywords', 'description'];

    // If there are any relationships, define them here (optional based on your use case)
    // Example: if Category has a relation with PostBlog
    // public function postBlogs()
    // {
    //     return $this->hasMany(PostBlog::class);
    // }
}
