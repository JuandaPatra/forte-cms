<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'lang',
        'title',
        'slug',
        'description1',
        'description2',
        'description3',
        'content',
        'images1',
        'images2',
        'date',
        'status'
    ];

}
