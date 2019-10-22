<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'note', 'description', 'color', 'price', 'category_id', 'producer_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function producer(){
    	return $this->belongsTo('App\Producer');
    }

    public function imgsProduct(){
    	return $this->hasMany('App\ImgProduct');
    }
}
