<?php

use App\Http\Controllers\all_studentsController;
use App\Http\Controllers\EtablissementsController;

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
    Route::get('/', 'index')->name('index');
    Route::get('/etudiants/{year?}', 'etu')->name('etudiants');

    Route::post('/excel','import')->name('test');
    Route::post('/excel2', 'redr')->name('insert');
    Route::get('/tables', 'tables')->name('tables');

   
});
Route::controller(EtablissementsController::class)->group(function(){
    Route::post('/etablissements', 'store')->name('store');
    Route::get('/etablissements', 'index')->name('etablissements');
    Route::get('/import/etudiants', 'import')->name('import_etudiant');
    Route::get('/etablissements/{id?}', 'show')->name('one');


});






    Route::get('/layout-static', function () {
    return view('layout-static'); })->name('layout-static');
    Route::get('/layout-sidenav-light', function () {
        return view('layout-sidenav-light'); })->name('Export');

  


    Route::get('/charts', function () {
    return view('charts');
})->name('charts');


// Route::controller(ESPController::class)->group(function(){
//     Route::get('ESP', 'index');
//     Route::get('layout-sidenav-light',  'tables_ex')->name('layout-sidenav-light');
//     Route::post('ESP-import', 'import')->name('ESP.import');
// });

Route::get('/conf',function(){
    return view('confirm_import');
});





