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
    return view('index');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

##Login Controller
#CONFIRMACION DE CORREO
ROUTE::get('confirm_email','LoginController@confirm_email');
ROUTE::POST('mail_send','LoginController@mail_send');
Route::get('verify/{code}', 'LoginController@verify');
ROUTE::get('listo','LoginController@listo');

#LOGIN
Route::get( 'login' , 'LoginController@index' );
ROUTE::POST('validar','LoginController@validar');

#REGISTRAR NUEVO USUARIO, EMPRESA
ROUTE::get('url_pick','LoginController@url_pick');
ROUTE::get('user','LoginController@registrar');
ROUTE::get('company/{code}','LoginController@company');
ROUTE::POST('new_company','LoginController@new_company');
ROUTE::POST('new_link','LoginController@new_link');
ROUTE::POST('insertar' , 'LoginController@insertar')->middleware('validar');

// Authentication routes...
//Route::get('login', 'Auth\LoginController@getLogin');
//Route::resource('/','LoginController');
//Route::post('/login','LoginController@postLogin');
//Route::post('login',[ 'as' => 'login', 'uses' => 'LoginController@postLogin']);
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('register', 'Auth\RegisterController@');
//Route::resource('register', 'Auth\RegisterController');


/*Route::controllers([
   'password' => 'Auth\PasswordController',
]);*/
