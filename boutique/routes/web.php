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
Route::resource('étudiants',\App\Http\Controllers\EtudiantController::class)->only([
    'index','show'
]);
Route::resource('employers',\App\Http\Controllers\EmployerController::class)->only([
    'index'
]);
Route::get('employers',[\App\Http\Controllers\EmployerController::class,'show']);
Route::post('employers',[\App\Http\Controllers\EmployerController::class,'create']);
