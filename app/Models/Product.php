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

    /**
     * Get the Brand that owns the Product.
     */
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    /**
     * The Purchases that belong to the Product.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Purchase')
                        ->using('App\Models\ProductPurchase')
                        ->withPivot([
                            'batch',
                            'quantity',
                            'unit_price',
                            'sub_total'
                        ]);
    }
}
