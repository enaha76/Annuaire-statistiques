<?php

use App\Http\Controllers\all_studentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ESPController;
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



Route::controller(all_studentsController::class)->group(function(){
    Route::get('/', 'h')->name('index'); 
    Route::get('/etudiants', 'index')->name('etudiants'); 

    Route::get('/tables', 'tables')->name('tables');

   
   
});


    Route::get('/layout-static', function () {
    return view('layout-static'); })->name('layout-static');


    Route::get('/charts', function () {
    return view('charts');
})->name('charts');




Route::controller(ESPController::class)->group(function(){
    Route::get('ESP', 'index');
    Route::get('layout-sidenav-light',  'tables_ex')->name('layout-sidenav-light');
    Route::post('ESP-import', 'import')->name('ESP.import');
});

