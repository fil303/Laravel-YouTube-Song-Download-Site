<?php
use Spatie\Sitemap\SitemapGenerator;

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
//   HOME
Route::get('/','wolcome@index')->name('home');

//   CATOGERY navber
Route::get('category','catogery@index')->name('catogery');


//   DETAILS
Route::get('/{cat}/song/item/{id}','details@index');


//  Download
Route::get('/download/{cat}/item/{id}','download@index');


//  CATEGORY
Route::get('/hindi/playlist','category@hindi')->name('hindi');
Route::get('/english/playlist','category@english')->name('english');
Route::get('/bangla/playlist','category@bangla')->name('bangla');


//   VIDEO LIST 
Route::get('/hindi/playlist/item/{i}','videolist@h');
Route::get('/english/playlist/item/{i}','videolist@e');
Route::get('/bangla/playlist/item/{i}','videolist@b');


// CONTUCT
Route::get('/contuct',function (){
return view('contuct');
});

// PRIVACY
Route::get('/privacy&policy',function (){
return view('privacy');
})->name('privacy');

// TERMS $ CONDITION
Route::get('/terms&condition',function (){
return view('terms'); 
})->name('terms');

// Disclaimer
Route::get('/disclaimer',function (){
return view('dis');
});








//   UPLOAD
Route::get("upload","upload@get");
  Route::post("uploadd","upload@post")->name('aaa');


//  SITEMAP

  Route::get('site',function(){
  	SitemapGenerator::create('http://localhost/b/')->writeToFile('sitemap3.xml');
  	return 'success';
  });