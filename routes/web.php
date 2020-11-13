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

// Route::get('/', function () {
//     return view('AdminController@create');
// });
Route::get('/', 'AboutController@index');


Route::resource('admin', 'AdminController');
Route::resource('about', 'AboutController');
Route::resource('service', 'ServiceController');
Route::resource('training', 'TrainingController');
//Route::get('admin/index', 'AdminController@index');
Route::post('admin/createadmin', 'AdminController@createadmin');
Route::post('admin/logout', 'AdminController@logout');
Route::get('about/{id}/edit2edit', 'AboutController@edit2edit');
Route::put('aboutet/{id}', 'AboutController@update2edit');

Route::get('service/{id}/deledit', 'ServiceController@deledit');
Route::put('service/delupdate/{id}', 'ServiceController@delupdate');

Route::get('service/{id}/idedit', 'ServiceController@idedit');
Route::put('service/idupdate/{id}', 'ServiceController@idupdate');

Route::get('training/{id}/deledit', 'TrainingController@deledit');
Route::put('training/delupdate/{id}', 'TrainingController@delupdate');

Route::get('training/{id}/idedit', 'TrainingController@idedit');
Route::put('training/idupdate/{id}', 'TrainingController@idupdate');



// Route::put('admin/destroyabout/{id}', 'AdminController@destroyabout');





