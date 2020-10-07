<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
   public $guarded = [];

   public function scopePublishedImages($query){

   		return $query->where('published', true);
   }
}
