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

// Route::get('/master', function () {
//     return view('backend.layouts.master');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::view('/front', 'frontend.pages.index');

Route::namespace('Frontend')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/categories/{id}', 'HomeController@show')->name('cats.show');
});