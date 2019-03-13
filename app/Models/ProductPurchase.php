<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 
        'purchase_id',
        'batch', 
        'quantity', 
        'unit_price',
        'sub_total'
    ];

    protected $table = 'product_purchase';
}
