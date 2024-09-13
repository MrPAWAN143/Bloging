<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreMoreImage extends Model
{
    use HasFactory;

    // Mass-assignable fields
    protected $fillable = [
        'explore_more_id',
        'image_path',
    ];

    // Relationship to ExploreMore model
    public function exploreMore()
    {
        return $this->belongsTo(ExploreMore::class, 'explore_more_id');
    }
}
