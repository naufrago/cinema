<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
|/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| 
| se pueden asignar metodso como  post, get, put, delete
*/
/*
//hace el llamado a un controlador y  una funcion de este controlador retornando el contenido
Route::get('controlador','PruebaController@index');

//hace el llamdo a un controlador  con un parametro el cual es utilizado dentro de una 
//funcion del conytrolador  y retorna 
Route::get('name/{nombre}','PruebaController@nombre');

//hace el llamado a un controlador de multiples funciones
// para crear este controlador  vamos a la carpeta del proyecto y 
// colocamos en cmd php artisan make:controller MovieController
Route::resource('movie','MovieController');



Route::get('prueba', function(){
	return "hola desde  routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
	return "mi nombre es : ".$nombre;
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

// rutas a las vistas
Route::get('/', 'FrontController@index');
Route::get('home', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::resource('usuario', 'UsuarioController@create');
