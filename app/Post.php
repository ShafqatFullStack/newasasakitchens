<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = "posts";


    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    public function admin(){
        return $this->belongsTo('App\Admin','author_id');
    }

    public function business(){
        return $this->belongsTo('App\Business','author_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function scopeFilter($query, $filters){

        if (isset($filters['month'])){
            if($month = $filters['month']){
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
        }

        if(isset($filters['year'])){
            if($year = $filters['year']){
                $query->whereYear('created_at', $year);
            }
        }
    }
}
