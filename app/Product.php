<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
        return $this->hasMany('App\ProductImage','product_id');
    }
    public function img(){
        return $this->hasOne('App\ProductImage','product_id');
    }
    public function advantages(){
        return $this->hasMany('App\Advantage','product_id');
    }
}
