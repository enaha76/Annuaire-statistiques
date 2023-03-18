<?php

use App\Http\Controllers\all_studentsController;
use App\Http\Controllers\EtablissementsController;
use App\Http\Controllers\ArchiveController;
use Illuminate\Support\Facades\Auth;
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



Route::controller(all_studentsController::class)->group(function(){
    Route::get('/home', 'index')->name('index')->middleware('auth');
    Route::get('/etudiants/{year?}', 'etu')->name('etudiants')->middleware('auth');

    Route::post('/excel','import')->name('test')->middleware('auth');
    Route::post('/excel2', 'redr')->name('insert')->middleware('auth');
    Route::get('/tables/{year?}/{years?}', 'tables')->name('tables')->middleware('auth');
});
Route::controller(EtablissementsController::class)->group(function(){
    Route::post('/etablissements', 'store')->name('store')->middleware('auth');
    Route::get('/etablissements', 'index')->name('etablissements')->middleware('auth');
    Route::get('/import/etudiants', 'import')->name('import_etudiant')->middleware('auth');
    Route::get('/etablissements/{id?}', 'show')->name('one')->middleware('auth');
});





Route::controller(ArchiveController::class)->group(function(){
    Route::get('/helo', function () {
        return view('helo');
    })->name('helo')->middleware('auth');
Route::post('/up',"up")->name("up")->middleware('auth');

});

    Route::get('/layout-static', function () {
    return view('layout-static'); })->name('layout-static')->middleware('auth');
    Route::get('/layout-sidenav-light', function () {
        return view('layout-sidenav-light'); })->name('Export')->middleware('auth');




    Route::get('/charts', function () {
    return view('charts');
})->name('charts')->middleware('auth');


// Route::controller(ESPController::class)->group(function(){
//     Route::get('ESP', 'index');
//     Route::get('layout-sidenav-light',  'tables_ex')->name('layout-sidenav-light');
//     Route::post('ESP-import', 'import')->name('ESP.import');
// });

Route::get('/conf',function(){
    return view('confirm_import');
})->middleware('auth');

Route::get('/',function(){
    return view('auth.login');
});







