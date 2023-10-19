<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function befores(){
        return $this->hasMany('App\BeforeAfter','work_id');
    }
    public function images(){
        return $this->hasMany('App\WorkImage','work_id');
    }
    
    public function videos(){
        return $this->hasMany('App\Video','work_id');
    }
}
