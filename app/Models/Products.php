<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product-slug',
        'lang',
        'name',
        'description',
        'images1',
        'images2'
    ];

    public function ProductMain()
    {
        $this->belongsTo(ProductMain::class, 'product_id', 'id');
    }
}
