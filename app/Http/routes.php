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

Use App\Nombres;

Route::get('/', function () {
    return view('welcome');
});

/*
 * para vaciar tabla:
 * -php artisan tinker
 * -App\Nombres::->truncate()
 */
Route::get('nombres', 'NombresController@index');

Route::get('nombres/crear', 'NombresController@create');

Route::post('nombres', 'NombresController@store');

Route::get('nombres/{nombre}', 'NombresController@show')->where('nombre','[0-9]+');