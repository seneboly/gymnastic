<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Galery;

class GaleryController extends Controller
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
       

       return view('dashboard.galerie', ['images'=>Galery::select(['id','name_of_image', 'published'])
        ->paginate(10) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// dd($request->all());

        if(!empty($request->name_of_image)){

            $validation = Validator::make($this->rules(), $request->name_of_image);

            if($validation->fails()){

                return back()->withValidation($validation);

            }else{

                $images = $request->file('name_of_image');

                foreach ($images as $img) {

                     $nom_photo = $img->getClientOriginalName();

                     $img->storeAs('images', $nom_photo, 'local');

                      Galery::create(['name_of_image'=>$nom_photo, 'published'=> $request->published]);
                }

                return redirect()->back()->with(['message'=>'Vos images enregistrées', 'class'=>'alert-success']);
              
            }

        }
    }
 
    public function rules(){

        return ['name_of_image'=>'required|image'];
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update_images(Request $request)
    {
        $images = $request->desc;
        $state = $request->published ?? false;
        
        $this->published_img($images, $state);

        return redirect()->back()->with(['message'=>'Modifications réussies. ', 'class'=>'alert-success']);;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);


        $path = storage_path('app\images\\'.$gallery->nom_image);

        // dd($path);

        $real_path = Storage::delete($path);

        // dd($real_path);

        $gallery->delete();

        return redirect()->back()->with(['message'=>'image supprimée', 'class'=>'alert-danger']);
    }

    public function published_img(array $images, $state){

        foreach($images as $img){

            $img_to_update = Galery::findOrFail($img);

            $img_to_update->update(['published'=>$state]);

        }
        
        return $this;
    }

     
}
