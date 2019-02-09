<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'cover_img', 'status', 'parent_id'
    ];

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
