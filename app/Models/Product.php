<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'images',
        'description',
        'price',
        'old_price',
        'quantity_in_stock',
        'is_active',
        'is_featured',
        'on_slae',
    ];

    protected $casts = [
        'images' => 'array', // Cast the images field to an array
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems() {
        return $this->hasMany(orderItems::class);
    }
}
