<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'slug',
        'cover_img', 
        'short_description', 
        'description', 
        'images', 
        'quantity', 
        'unit_price', 
        'sale_price', 
        'discount_price', 
        'category_id'
    ];

    /**
     * Get the Category that owns the Product.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
