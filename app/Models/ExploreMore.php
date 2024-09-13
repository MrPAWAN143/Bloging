<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreMore extends Model
{
    use HasFactory;

    // Define the table if it's different from the model name
    protected $table = 'explore_more';

    // Mass-assignable attributes
    protected $fillable = [
        'user_id',
        'category_id',
        'heading', // Assuming you're using 'heading' as per your structure
        'slug',
        'meta_title',
        'meta_description',
        'keyword',
        'description',
    ];

    /**
     * Relationship to the User model
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship to the Category model
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relationship to the ExploreMoreImage model (multiple images for each ExploreMore post)
     */
    public function images()
    {
        return $this->hasMany(ExploreMoreImage::class);
    }
}
