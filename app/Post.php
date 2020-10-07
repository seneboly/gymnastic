<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Category;

class Post extends Model
{
     protected $guarded = [];

     protected $date = ['created_at'];

     public function images(){

     	return $this->belongsToMany(Image::class);
     }

     public function category(){

     	return $this->belongsTo(Category::class);
     }

     public function getRouteKeyName(){

     	return 'slug';
     }
}
