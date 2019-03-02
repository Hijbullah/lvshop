<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id', 'name'
    ];

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
