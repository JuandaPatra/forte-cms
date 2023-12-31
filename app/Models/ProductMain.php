<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'order',
        'category',
        
    ];

    public function product ()
    {
        $this->hasMany(Products::class,'id', 'product_id');
    }

}
