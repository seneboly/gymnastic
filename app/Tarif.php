<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Tarif extends Model
{
    protected $guarded = [];

   

     public function courses(){

    	return $this->belongsToMany(Course::class);
    }
}
