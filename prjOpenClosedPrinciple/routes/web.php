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
    return view('figuras');
});

Route::get('/rectangulo', function () {
    return view('rectangulo');
});

Route::get('/circulo', function () {
    return view('circulo');
});

Route::post('/CalculoC', 'CalculoSPController@areaCirculo')->name('area.Circulo');

Route::post('/CalculoR', 'CalculoSPController@areaRectangulo')->name('area.Rectangulo');

Route::post('/CalculoCir', 'CalculoController@calculoAreaCirculo')->name('Circulo');

Route::post('/CalculoRect', 'CalculoController@calculoAreaRectangulo')->name('Rectangulo');