<?php 

namespace App\services;

/**
 * 
 */


class Count
{

	public $type_inscrits = ['ADHESION', 'COURS', 'ENFANT'];
	public $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

	public function nbreResultat($courses){

		$this->courses = $courses;

		$items = [];
		foreach ($courses as $cours) {
			
			if(!empty($cours->students)){

				$items[] = $cours->students;
			}
		}

		return count($items);
	}

	public function type_inscrits(){

		return ['ADHESION', 'COURS', 'ENFANT'];
	}


	
}












 ?>