<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedBlogImage extends Model
{
    use HasFactory;

    // Set the table name
    protected $table = 'featured_post_imagesx';

    // Define fillable properties
    protected $fillable = [
        'featured_blog_id',
        'image_path',
    ];

    // Relationship with FeaturedBlog
    public function featuredBlog()
    {
        return $this->belongsTo(FeaturedBlog::class);
    }
}
