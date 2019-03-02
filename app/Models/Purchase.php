<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_code', 
        'suplier_id',
        'total_quantity', 
        'total_price', 
        'purchase_date'
    ];


    /**
     * The Products that belong to the Purchase.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')
                        ->using('App\Models\ProductPurchase')
                        ->withPivot([
                            'batch',
                            'quantity',
                            'unit_price'
                        ]);
    }
}
