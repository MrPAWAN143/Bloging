<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'slug',
        'meta_title',
        'meta_description',
        'keyword',
        'description',
        'category_id',
        'user_id',
    ];

    // Explicitly set the table name to 'featured_blogsx'
    protected $table = 'featured_blogsx';

    // Relationship with FeaturedBlogImage
    public function images()
    {
        return $this->hasMany(FeaturedBlogImage::class); // No cascade delete defined here
    }

    // Other relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
