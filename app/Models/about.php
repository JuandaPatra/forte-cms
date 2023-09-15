<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_id',
        'lang',
        'description1',
        'description2',
        'description3',
        'description4',
    ];
}
