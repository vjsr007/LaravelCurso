<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('Articulos',['middleware' => 'esdomingo'], function(){
    dd(\App\Articulo::all());
});

Route::get('Home/{parametro?}','HomeController@Index');

Route::get('Home/Index/{parametro?}','HomeController@Index');

Route::get('/{parametro?}','HomeController@Index');

//Route::get('/{parametro?}', function ($parametro="") {
//    $data = array('usuario' => 'Hola Mundo', 'parametro' => $parametro);
//    return view('welcome', $data);
//});//->where(array('parametro' => '[0-9]+'));
