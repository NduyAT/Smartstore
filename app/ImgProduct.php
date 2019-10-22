<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    protected $fillable = ['img', 'product_id'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
