<?php



namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tarif;
use App\Course;

class TarifController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifs = Tarif::with('courses')->orderBy('created_at', 'desc')->distinct('course_name')->get();
        $courses = Course::orderBy('heure_cours', 'asc')->groupBy(['id','course_name', 'heure_cours','monitor_id', 'place_max','created_at', 'updated_at','show_in_week_schedule','cours_img'])->get();
        return view('dashboard.tarification', ['courses'=>$courses, 'tarifs'=>$tarifs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cours_id = $request->course_id;

        $tarif = Tarif::create($request->except('course_id'));


        $tarif->courses()->attach($this->cours($cours_id));

        return back()->with(['message'=>'Tarif enregistré', 'class'=>'alert-success']);
    }

    public function cours($id){

        $cours = Course::find($id);

        return $cours;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarif $tarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarif $tarif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarif $tarif)
    {
        $tarif->update($request->all());

        return back()->with(['message'=>'Tarifs mise à jour', 'class'=>'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarif $tarif)
    {
        $tarif->delete();

        return back()->with(['message'=>'Tarifs supprimé', 'class'=>'alert-danger']);
    }
}
