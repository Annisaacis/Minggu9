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

// Route::get('/', function () {
//    return view('welcome');
// });

//Route::get('/', 'homeController@home')->name('home');
//Route::get('/home', 'homeController@home');
//Route::get('/about', 'aboutController@about')->name('about');
//Route::get('/article/{id}', 'articleController@article');
//Auth::routes();

Route::get('/', function () {
    return view('home');
});
Route::get('/home', 'homeController@index');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/', function(){
    return view ('Home');
});
Route::get('/about', function(){
    return view ('About');
});
Route::get('article($page)', function(){
    return view ('article($page)');
});
Route::get('/index', function(){
    return view ('index');
});
Route::get('/indexx', function(){
    return view ('indexx');
});
Route::get('/coba', function(){
    return view ('coba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');