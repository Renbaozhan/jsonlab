<?php
Use App\Service;
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
Route::get('services', 'ServiceController@index');
Route::get('services/{service}', 'ServiceController@show');
Route::post('services', 'ServiceController@store');
Route::put('services/{service}', 'ServiceController@update');
Route::delete('services/{service}', 'ServiceController@delete');

//nlp api
Route::post('nlp/wordcut', 'NlpController@wordcut');
