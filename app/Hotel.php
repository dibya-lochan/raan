<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'description'];
    
    public function comments()
    {
        return $this->hasMany('App\Comment', 'hotel_id');
    }
}
