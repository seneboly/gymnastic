<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;

use Jenssegers\Date\Date;

use App\Post;
use App\Monitor;
use App\Student;

class DashboardController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
	}
	
    public function index(){
    	$courses = Course::with('students')
        ->orderBy('created_at', 'desc')
        ->get();
        $articles = Post::pluck('id');
        $monitors = Monitor::pluck('id');
        $inscrits = Student::pluck('id');

        $inscrits_by_months = $this->inscrits();
        
    	return view('dashboard.index')
        ->with(['courses'=>$courses, 'articles'=>$articles, 'monitors'=>$monitors,'inscrits'=>$inscrits, 'students'=>$inscrits_by_months]);
    }

    public function inscrits(){

        $current_year = now()->year;

        $inscrits_by_months = [];
       
        
        for ($i=1; $i<=12; $i++){

        $inscrits = Course::whereYear('heure_cours', "$current_year")->whereMonth('heure_cours', "$i")->get();

        $inscrits_by_months[] = $inscrits->flatMap->students->count();
        }

        return collect($inscrits_by_months);
    }
}
