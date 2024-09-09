<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBlogImage extends Model
{
    use HasFactory;

    protected $fillable = ['post_blog_id', 'image_path'];

    public function postBlog()
    {
        return $this->belongsTo(PostBlog::class, 'post_blog_id');
    }
}
