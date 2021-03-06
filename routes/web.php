<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/categoria','App\Http\Controllers\CategoriaController' );

Route::resource('/videos','App\Http\Controllers\VideoController' );
//llamar la vista desde un controlador

Route::get('/products', 'App\Http\Controllers\InicioController@products');
Route::get('/contact', 'App\Http\Controllers\InicioController@contact');
Route::get('/about', 'App\Http\Controllers\InicioController@about');
Route::get('/nosotros', 'App\Http\Controllers\InicioController@nosotros');


Route::get('/bicicletas', function(){
    return view('bicicletas.index');
});

/*
//retorna una vista views y pasar un parametro  ['tituloAbout' =>'About']
Route::get('/about', function(){
    return view('about',['tituloAbout' =>'About']);
});


//pasar valor por url $id
Route::get('/testurl/{id}', function($id){
    return "el id pasado por url es $id";
});

//ejemplo llamando una ruta solo retorna texto
Route::get('/test', function () {
    return "Mostrar solo texto sin llamar una vista";
    
});

Route::get('/contact', function () {
    return view('contact');
});
*/