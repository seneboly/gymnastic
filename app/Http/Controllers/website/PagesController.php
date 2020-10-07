<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Galery;

use App\Course;
use App\Tarif;


class PagesController extends Controller
{
    public function __construct(){

        
    }

    public function index(){

       

    	return view('website.index', [
    									'articles'=>Post::with('images')->where('status', true)->paginate(6)]
    				);
    }

    public function contact(){

    	return view('website.contact');
    }

    public function about(){

    	return view('website.about');
    }
   
    public function programm(){
        $courses = Course::with(['monitor', 'students'])->where('show_in_week_schedule', true)->get();
        return view('website.program', compact('courses'));
    }
}
