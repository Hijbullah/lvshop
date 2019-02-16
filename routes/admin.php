<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blank', function () {
    return view('backend.pages.blank');
});

// Admin Auth Routes

Route::namespace('Backend\Auth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('admin.logout');
});


Route::namespace('Backend')->group(function () {
    Route::get('/', 'AdminController@showDashboard')->name('admin.dashboard');
    Route::get('/admins/all', 'AdminController@loadAdmin');
    Route::resource('admins', 'AdminController');
    Route::resource('categories', 'CategoryController')->except([
        'create', 'edit'
    ]);
    Route::resource('products', 'ProductController');
    Route::get('showing', 'ProductController@showing');

});



