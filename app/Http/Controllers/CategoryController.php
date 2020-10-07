<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request){

    	Category::create(['name_of_cat'=>$request->name_of_cat]);

    	return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Nouvelle entête ajoutée']);
    }

    public function edit(Request $request, $id){

    	$categorie = Category::findOrFail($id);

    	return view('dashboard.edit_course_name', compact('categorie'));
    }

    public function update(Request $request, $id){

    	$categorie = Category::findOrFail($id);

    	$categorie->update($request->all());

    	return redirect()->back()->with(['class'=>'alert-success', 'message'=>'Intitulé du cours modifié.']);
    }
}
