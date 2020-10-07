<?php

namespace App\Http\Controllers\inscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Monitor;
use App\Category;
use App\Mail\NotifyRegistered;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

class CoursesController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except(['create', 'store']);

    }

    public function create($id){
        $cours = Course::findOrFail($id);
    	$courses = Course::orderBy('heure_cours','asc')->get();
    	return view('website.inscription.create', compact('cours'))->withCourses($courses);
    }

    public function store(Request $request, $id){

    	$student_credentiels = $request->except(['course_id']);
    	

    	$course = Course::findOrFail($id);
       
        $etudiant = Student::create($student_credentiels);

    	$etudiant->courses()->attach($course);

        Mail::to('seneboly@gmail.com')->send(new NotifyRegistered($student_credentiels, $course));

    	return back()->with(['message'=>'Votre inscription a été bien enregistrée', 'class'=>'alert-success']);
    }

  

    public function addCourse(){
        $monitors = Monitor::all();
        $courses =  Course::with('monitor')->orderBy('heure_cours', 'asc')->paginate(10);
        return view('dashboard.courses', compact('monitors', 'courses'))->withCategories(Category::all());
    }

    public function storeCourse(Request $request){

        $infos = $request->except(['cours_img']);

        $image = $request->file('cours_img');

        if(isset($image)){

            $nom_photo = $image->getClientOriginalName();

            $image->storeAs('cours', $nom_photo, 'local');
            
            $img_cover = ['cours_img'=>$nom_photo];

            $all_credentiels = array_merge($infos, $img_cover);

        }
        else{

            $all_credentiels = $request->all();
        }

        // dd($all_credentiels);

        Course::create($all_credentiels);

       return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Le cours a été enregistré.']);
    }

    public function editCourse(Request $request, Course $course){
        $categories = Category::all();
        $monitors = Monitor::all();
        return view('dashboard.editCourse',compact('course', 'monitors'))->withCategories($categories);
    }

    public function updateCourse(Request $request, Course $course){

        $infos = $request->except(['heure_cours', 'cours_img']);

        $image = $request->file('cours_img');

        if(!empty($image)){

            $nom_photo = $image->getClientOriginalName();

            $image->storeAs('cours', $nom_photo, 'local');

            $img_cover = ['cours_img'=>$nom_photo];

            $heure_cours = Carbon::parse($request->heure_cours)->toDateTimeString();

            $heure = ['heure_cours'=>$heure_cours];

            $all_credentiels = array_merge($infos, $img_cover, $heure);

            // dd($all_credentiels);
        }
        else{

            $heure_cours = Carbon::parse($request->heure_cours)->toDateTimeString();

            $courses = array_merge(['heure_cours'=>$heure_cours],$infos);

            $heure = ['heure_cours'=>$heure_cours];
            $all_credentiels = array_merge($infos, $heure);

            // dd($all_credentiels);
        }

        $course->update($all_credentiels);

        return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Le cours a été mise à jour.']);

    }

    public function getEntete(){
        $entetes = Category::all();
        return view('dashboard.entete_cours_list', compact('entetes'));
    }

    public function updateEntete(Request $request, $id){

       $entete = Category::find($id);

       $entete->update($request->all());

        return redirect()->back()->with(['class'=>'alert-success', 'message'=>'L\'entête de cours a  a été mise à jour.']);
    }

    public function deleteEntete(Request $request, $id){

        $entete = Category::find($id);
        // dd($entete);
        $entete->delete();

         return redirect()->back()->with(['class'=>'alert-danger', 'message'=>'L\'entête de cours a  a été supprimée.']);
    }

    public function deleteCourse(Course $course){

        $course->delete();

        return redirect()->back()->with(['class'=>'alert-danger', 'message'=>'Le cours a été supprimé.']);
    }
}
