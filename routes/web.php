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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('profile', 'HomeController@profile')->name('profile');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/getLogin', function (){
    return view('auth.login');
});
Route::get('/getRegister', function (){
    return view('auth.register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function (){
	return view('profile');
});

Route::resource('user', 'UserController');
Route::get('/editProfile', 'ProfileController@editProfile');
Route::post('/editProfile/{id}', 'UserController@update')->name('editar');

Route::get('/admin', 'UserController@isAdmin');
Route::get('/listaUsuarios', 'UserController@listarUsuarios');

Route::post('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');

Route::get('/createUser', function(){
	return view('createUsuario');
});

Route::post('/createUser', 'UserController@createUser')->name('createUser');
Route::post('validate', 'UserController@store');

Route::get('/editUser', function(){
	return view('editUser');
});
Route::post('/editUser/{id}', 'UserController@editUser')->name('editarAdmin');