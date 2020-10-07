<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Post;
use App\Category;

use Illuminate\Support\Str; 

use App\Http\Requests\createPostRequest ;

class PostController extends Controller
{
    public function __construct(){

        $this->middleware(['auth'])->except(['index']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('dashboard.blog', [
                                    
                                    'Posts'=>Post::with(['images'])
                                    ->where('status', true)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(10),
                                    
                                  ]
                   );
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
    public function store(createPostRequest $request)
    {
        // dd($request->all());

        $content = htmlentities($request->content);
        $slug = Str::words($request->title, 5);

        $article = Post::create(
            [
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'category_id'=>$request->category_id,
                'content'=>$content,
                'status'=>$request->status ?? false,
                'slug'=>Str::slug($slug),
            ]);

        if(!empty($request->images)){

            $images = $request->file('images');

                foreach ($images as $img) {

                 $nom_photo = $img->getClientOriginalName();

                 $img->storeAs('articles', $nom_photo, 'local');

                 $img_saved = Image::create(['name_of_image'=>$nom_photo]);
                 
            $article->images()->attach($img_saved);
        }


    }

    return redirect()->back()->with(['message'=>'Votre article a été créé avec succès.','class'=>'alert-success']);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $article
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backoffice.Posts.edit',compact('post') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(createPostRequest $request, Post $post)
    {
        $content = htmlspecialchars_decode($request->content);
        $slug = Str::words($request->title, 5);
               $article->update( 
                [
                    'title'=>$request->title,
                    'subtitle'=>$request->subtitle,
                    'content'=>$content,
                    'status'=>$request->status,
                    'slug'=>Str::slug($slug),
                   
                ]
              );

            if(!empty($request->images)){

                 $images = $request->file('images');

                    foreach ($images as $img) {

                         $nom_photo = $img->getClientOriginalName();

                         $img->storeAs('articles', $nom_photo, 'local');

                         $img_saved = Image::create(['nom_image'=>$nom_photo]);
                         
                        $this->attachImgToArticle($article, $img_saved->id);
            }


        }

        return redirect()->route('articles.create')->with(['message'=>'Votre article a été modifié avec succès.','class'=>'alert-success']);
    }

    public function updatePost(Request $request){

        $articles = $request->articles;

       if($request->delete){

        $this->destroy_many($articles);

        return redirect()->back()->with(['message'=>'Les articles ont été supprimés.','class'=>'alert-danger']);
       }
       else{

            foreach ($articles as $id) {
                
                $article = Post::findOrFail($id) ;

                $article->update(['status'=>$request->status]);

               
            }

       }

       

        return redirect()->back()->with(['message'=>'Vos articles ont été modifiés avec succès.','class'=>'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with(['message'=>'Votre Post a été bien supprimé.','class'=>'alert-danger']);
    }

    public function destroy_many($articles){

        foreach ($articles as $article) {
           
           $item = Post::findOrFail($article);

           $item->images()->detach();

           $item->delete();
        }



    }

   public function saveImages($images){

        foreach ($images as $img) {

             $nom_photo = $img->getClientOriginalName();

             $img->storeAs('articles', $nom_photo, 'local');

             $img_saved = Image::create(['nom_image'=>$nom_photo]);
             
            
        }

        return $this;


   }

   public function attachImgToArticle($article, $img){

        return $article->images()->attach($img);
   }

    
}
