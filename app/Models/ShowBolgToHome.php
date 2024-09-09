<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowBolgToHome extends Model
{
    use HasFactory;


    protected $table = 'post_blogs';

    protected $fillable = [
        'category_id',
        'heading',
        'slug',
        'meta_title',
        'meta_description',
        'keyword',
        'description',
    ];
}
