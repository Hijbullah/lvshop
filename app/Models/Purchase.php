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
        'supplier_id',
        'total_quantity', 
        'total_price', 
        'purchase_date'
    ];

     /**
     * The Supplier that belong to the Purchase.
     */
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    /**
     * The Products that belong to the Purchase.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')
                        ->withPivot([
                            'batch',
                            'quantity',
                            'unit_price',
                            'sub_total'
                        ]);
    }
}
