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
    return view('welcome');
});
Route::get('patient', 'App\Http\Controllers\PatientController@index');
Route::get('patient/{id}', 'App\Http\Controllers\PatientController@search');
Route::post('update/{id}', 'App\Http\Controllers\PatientController@update');
Route::post('insert', 'App\Http\Controllers\PatientController@insert');
Route::get('sort', 'App\Http\Controllers\PatientController@sort');
Route::get('patins', function () {
    return view('patientinsert');
});
Route::get('u-view/{id}','App\Http\Controllers\PatientController@handleEdit');
Route::get('delete/{id}', 'App\Http\Controllers\PatientController@delete');
Route::post('/search', 'App\Http\Controllers\PatientController@searchtxt');
