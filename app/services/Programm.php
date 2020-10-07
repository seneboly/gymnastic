<?php 

namespace App\Services;


use App\Course;

use Carbon\Carbon;


class Programm 
{
	
	public function cours($courses, $id){

		
		$courses_list = ['lundi'=>[],'mardi'=>[],'mercredi'=>[], 'jeudi'=>[],'vendredi'=>[],'samedi'=>[], 'dimanche'=>[]];

		foreach ($courses as $course) {

			$nbj = Carbon::parse($course->heure_cours)->format('N');

				switch ($nbj) {
					case '1':
						$courses_list['lundi'][] = $course;
						break;
						case '2':
						$courses_list['mardi'][] = $course;
						break;
						case '3':
						$courses_list['mercredi'][] = $course;
						break;
						case '4':
						$courses_list['jeudi'][] = $course;
						break;
						case '5':
						$courses_list['vendredi'][] = $course;
						break;
						case '6':
						$courses_list['samedi'][] = $course;
						break;
						case '7':
						$courses_list['dimanche'][] = $course;
						break;
								
				}
			
		}

		 $my_cours = [];

		 foreach($courses_list[$id] as $cour){

    	 	$my_cours[] = $cour;
    	 }
		
		return collect($my_cours);
	}
}





















 ?>