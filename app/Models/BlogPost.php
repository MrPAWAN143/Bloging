<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'heading',
        'subheading',
        'description',
        'category',
        'images',
    ];

    protected $casts = [
        'images' => 'array', // Automatically cast images as array when retrieved
    ];
}
