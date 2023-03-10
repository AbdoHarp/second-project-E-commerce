<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_titel',
        'meta_description',
        'meta_keyword',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id', 'id');
    // }
}
