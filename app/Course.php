<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Monitor;

use App\Tafif;

class Course extends Model
{
    protected $guarded = [];

    public function students(){

    	return $this->belongsToMany(Student::class);
    }

    public function monitor(){

    	return $this->belongsTo(Monitor::class);
    }

    public function tarifs(){

    	return $this->belongsToMany(Tarif::class);
    }

   
}
