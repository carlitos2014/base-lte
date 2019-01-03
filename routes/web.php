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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::group(['middleware' => 'guest'], function () {

	Route::group(['prefix'=>'auditorias', 'as'=>'auditorias.'], function() {

		Route::resource('prueba', 'PruebaController'); //CRUD
		//Route::get('/programacion','AuditoriaController@programacion')->name('programacion');
		//Route::post('/programacion/pdf','AuditoriaController@programacionBuildPdf')->name('programacion.buildPdf');

	});


	Route::group(['prefix'=>'config', 'as'=>'config.'], function() {

		Route::resource('sedes', 'SedeController'); //CRUD

	});


  

});
