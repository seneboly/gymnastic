<?php

namespace App\Http\Controllers;

use App\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$monitors = Monitor::all();
        return view('dashboard.monitor', compact('monitors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->file('monitor_img') == null){
            Monitor::create($request->all());
        }else{

            $image = $request->file('monitor_img');

            $nom_photo = $image->getClientOriginalName();

            $image->storeAs('moniteurs', $nom_photo, 'local');

            $infos = $request->except('monitor_img');

            $img = ['monitor_img'=>$nom_photo];

            $monitors = array_merge($infos, $img);
            Monitor::create($monitors);
        }

        return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Moniteur enregistré avec succès']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function show(Monitor $monitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Monitor $monitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $monitor = Monitor::findOrFail($id);

        if($request->file('monitor_img') == null){

            
            $monitor->update($request->all());  
        }
        else{

            $image = $request->file('monitor_img');

            $nom_photo = $image->getClientOriginalName();

            $image->storeAs('moniteurs', $nom_photo, 'local');

            $infos = $request->except('monitor_img');

            $img = ['monitor_img'=>$nom_photo];

            $monitors = array_merge($infos, $img);

            $monitor->update($monitors);
        }
        	
        return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Les modifications ont été prises en compte']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        	$monitor = Monitor::findOrFail($id);
        
            $monitor->delete();

            return redirect()->back()->with(['class'=>'alert-danger', 'message'=>'Moniteur supprimé de la liste']);
    }
}
