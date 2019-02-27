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
Route::get('/start', function () {
    return view('backend.starter');
});
Route::get('/orders', function () {
    return view('backend.pages.order');
});
Route::get('/sales', function () {
    return view('backend.pages.sale');
});
Route::get('/deliverys', function () {
    return view('backend.pages.delivery');
});

Route::get('/receivings', function () {
    return view('backend.pages.purchases.index');
});

Route::get('/receivings/create', function () {
    return view('backend.pages.purchases.create');
});

Route::get('/receivings/show', function () {
    return view('backend.pages.purchases.show');
});

Route::get('/shipping', function () {
    return view('backend.pages.shipping');
});
Route::get('/cupon', function () {
    return view('backend.pages.cupon');
});
Route::get('/setting', function () {
    return view('backend.pages.setting');
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
    Route::get('/customers', 'AdminController@customers')->name('customers');
    Route::resource('admins', 'AdminController');
    Route::resource('categories', 'CategoryController')->except([
        'create', 'edit'
    ]);
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
    Route::resource('suppliers', 'SupplierController');
    Route::get('showing', 'ProductController@showing');

    Route::view('/invoice', 'backend.pages.invoice')->name('sale.invoice');

});



