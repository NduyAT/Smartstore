<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function products(){
    	return $this->hasMany('App\Product');
    }

    public static function store($name){
    	$category = new Category();
    	$category->name = $name;
    	$category->save();
    }
}
