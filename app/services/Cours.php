<?php 

namespace App\Services;


use App\Course;

use Carbon\Carbon;


class Cours 
{
	public function canRegister($courses, $id){


		$all_courses = $courses->where('id', $id)->all();

	
		return collect($all_courses)->flatMap->students;
	}

	public function registered($courses, $id){

		$all_courses = $courses->where('id', $id)->all();


		return collect($all_courses)->flatMap->students->count();
	}

	
	
}