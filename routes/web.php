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

Route::redirect('/','index');

Auth::routes();


// WEB //

//Index --> Lista todos los Posts Publicados
Route::get('index', 'Web\PageController@index')->name('index');

//Post --> Muestra un Post en Particular con todos sus detalles
Route::get('post/{slug}', 'Web\PageController@post')->name('post');

//Category --> Lista todos los Posts de una Categoría determinada
Route::get('category/{slug}', 'Web\PageController@category')->name('category');

//Tag -->  Lista todos los Posts de una Etiqueta determinada
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');




//	ADMIN 	//

