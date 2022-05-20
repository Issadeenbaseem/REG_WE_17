<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Route::get('/home',[HomeController::class,'redirect']);
Route::get('/myappoiments',[HomeController::class,'myappoiment']);

Route::get('add_doctor_view',[AdminController::class,'view_doctor']);
Route::post('upload_doctor',[AdminController::class,'add_doctor']);

Route::post('appoiment',[HomeController::class,'appoiment']);
Route::get('appoint_cancel/{id}',[HomeController::class,'appoiment_delete']);

Route::get('appoinment_view',[AdminController::class,'appoinment_view']);
Route::get('approve/{id}',[AdminController::class,'approve']);
Route::get('cancel/{id}',[AdminController::class,'cancel']);

Route::get('manage_doctor_view',[AdminController::class,'manage_doctor_view']);

Route::get('doctor_delete/{id}',[AdminController::class,'doctor_delete']);
Route::get('/doctor_edit/{id}',[AdminController::class,'doctor_edit']);

Route::post('/update_doctor/{id}',[AdminController::class,'update_doctor']);





Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
