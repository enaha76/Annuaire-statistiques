<?php

use App\Http\Controllers\all_studentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtablissementsController;
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
    Route::get('/etudiants', 'index')->name('etudiants'); 

    

   
});
Route::controller(EtablissementsController::class)->group(function(){
    Route::post('/insert_etablissements', 'store')->name('etablissements.store');
    Route::get('/etablissements', 'index')->name('etablissements');
    Route::get('/import/etudiants', 'import')->name('import_etudiant');
    

   
});
Route::post('import', 'ExcelImportController@import')->name('import');



// <<<<<<< HEAD
    Route::get('/layout-static', function () {
    return view('layout-static'); })->name('layout-static');

    Route::get('/layout-static', function () {
        return view('layout-static'); })->name('layout-static');


    Route::get('/charts', function () {
    return view('charts');
})->name('charts');

// =======
   
// >>>>>>> e13674984d1dc9bafca457e6cd4c18c5f39d98cb



// Route::controller(ESPController::class)->group(function(){
//     Route::get('ESP', 'index');
//     Route::get('layout-sidenav-light',  'tables_ex')->name('layout-sidenav-light');
//     Route::post('ESP-import', 'import')->name('ESP.import');
// });

