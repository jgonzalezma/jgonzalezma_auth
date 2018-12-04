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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);
Auth::routes();

Route::get('/getLogin', function (){
    return view('auth.login');
});
Route::get('/getRegister', function (){
    return view('auth.register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function (){
	return view('auth.profile');
});