<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/home', '/');

Route::namespace('website')->group(function(){

	Route::get('/', 'PagesController@index')->name('home');
	Route::get('/contact', 'PagesController@contact')->name('contact');
	Route::post('/contact', 'MessageController@store')->name('sendEmail');
	Route::get('/a-propos', 'PagesController@about')->name('about');
	Route::get('/programme', 'PagesController@programm')->name('programm');

	
});

Route::prefix('cours')->namespace('inscription')->group(function(){

	Route::get('ajouter', 'CoursesController@addCourse')->name('addCourses');
	Route::post('ajouter', 'CoursesController@storeCourse')->name('storeCourse');
	Route::get('ajouter/{course}', 'CoursesController@editCourse')->name('editCourse');
	Route::put('ajouter/{course}', 'CoursesController@updateCourse')->name('updateCourse');
	Route::delete('ajouter/{course}', 'CoursesController@deleteCourse')->name('deleteCourse');

	Route::get('modifier-entete-cours', 'CoursesController@getEntete')->name('entetes');
	Route::put('modifier-entete-cours/{id}', 'CoursesController@updateEntete')->name('edit-entete');
	Route::delete('modifier-entete-cours/{id}', 'CoursesController@deleteEntete')->name('delete-entete');

});

Route::prefix('inscription')->namespace('inscription')->group(function(){

	Route::get('cours/{id}', 'CoursesController@create')->name('course-create');
	Route::post('cours/{id}', 'CoursesController@store')->name('course-store');

});

Route::prefix('tableau-bord')->namespace('dashboard')->group(function(){

	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::put('/galerie', 'GaleryController@update_images')->name('update_images');
	Route::resource('galerie', 'GaleryController');
	Route::get('/programme', 'ProgrammController@index')->name('programme');
	
	Route::put('articles', 'PostController@updatePost')->name('update_articles');
	Route::resource('publications', 'PostController');

	Route::resource('tarifs', 'TarifController');
});

Route::get('articles/tous-les-articles/{categorie}', 'ArticleController@getArticleByCat')->name('article_by_cat');

Route::resource('moniteurs', 'MonitorController');
Route::get('inscrits', 'StudentController@index')->name('inscrits');

Route::post('/cours/ajouter/entete', 'CategoryController@store')->name('store_entete');

Route::resource('articles', 'ArticleController');



Auth::routes();


Route::get('/export-excel', 'ExcelExportController@index');
Route::get('/export-excel-download', 'ExcelExportController@excel')
->name('export_excel.excel');