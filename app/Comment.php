<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['hotel_id', 'comments'];
    
    public function hotel()
    {
        return $this->belongsTo('App\Comment');
    }
}
