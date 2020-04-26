<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function cat()
    {
        return $this->belongsTo('App\Category');
    }
 
    public function users()
    {
        return $this->belongsToMany('App\Product','carts','product_id','user_id');
    }
}
