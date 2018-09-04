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

Route::get('/', function () {
    return view('home');
});

// Route::get('home', function(){
//     return View('welcome'); // Your Blade template name
// });
Route::get('registerman', function(){
    return View('auth/registerman'); // Your Blade template name
});


Route::get('registersto', function(){
    return View('auth/registersto'); // Your Blade template name
});

Route::get('choose', function(){
    return View('choose'); // Your Blade template name
});
	
Route::get('/login', function(){
    return View('login'); // Your Blade template name
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
