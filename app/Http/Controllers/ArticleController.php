<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

use App\Image;


use Illuminate\Support\Str; 

use App\Http\Requests\createPostRequest ;
use App\Http\Requests\updatePostRequest ;

class ArticleController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except(['show', 'getArticleByCat']);
    }


    public function show(Post $article)
    {
        return view('website.article', compact('article'))
        ->with(
                [
                    'categories'=>Category::with('posts')->get(),
                ]);
    }

    public function create()
    {
        
        return view('dashboard.blog', ['categories'=>Category::all() ?? 'Nothing Yet !']);
    }

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

    public function edit(Post $article){

        return view('dashboard.edit', compact('article'))->withCategories(Category::all());
    }

    public function update(Post $article, updatePostRequest $request){

             $content = htmlentities($request->content);
            $slug = Str::words($request->title, 5);

            $article->update(['title'=>$request->title, 'subtitle'=>$request->subtitle,'category_id'=>$request->category_id,'content'=>$content, 'slug'=>Str::slug($slug)]);

            if(!empty($request->images)){

                $images = $request->file('images');

                    foreach ($images as $img) {

                     $nom_photo = $img->getClientOriginalName();

                     $img->storeAs('articles', $nom_photo, 'local');

                     $img_saved = Image::create(['name_of_image'=>$nom_photo]);
                  
                $article->images()->attach($img_saved);
            }


        }

        return redirect()->route('articles.create')->with(['message'=>'Votre article a été modifié.','class'=>'alert-success']);

    }

    public function getArticleByCat(Request $request, Category $categorie){

        

        return view('website.article_by_cat', compact('categorie'));
    }



}
