<?php

use App\Http\Controllers\all_studentsController;
use App\Http\Controllers\EtablissementsController;
use App\Http\Controllers\HistiriqueController;
use App\Models\Histirique;
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



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [all_studentsController::class, 'index'])->name('index');
    Route::get('/etudiants/{year?}', [all_studentsController::class, 'etu'])->name('etu');
    Route::get('/etudiant', [all_studentsController::class, 'showStatistics'])->name('etudiants');
    Route::post('/excel', [all_studentsController::class, 'import'])->name('test');
    Route::post('/excel2', [all_studentsController::class, 'redr'])->name('insert');
    Route::get('/tables/{year?}/{years?}', [all_studentsController::class, 'tables'])->name('tables');
    // Route::get('/test', [all_studentsController::class, 'showTestView'])->name('test');

});


Route::controller(all_studentsController::class)->group(function(){
    Route::get('/home', 'index')->name('index')->middleware('auth');
    // Route::get('/etudiants/{year?}', 'etu')->name('etu')->middleware('auth');
    Route::get('/etu/{year?}/{criteria1?}/{criteria2?}/{selectedYear?}/{results?}/{chartData?}', 'etu')->name('etu')->middleware('auth');
    Route::get('/etudiant', 'showStatistics')->name('etudiants')->middleware('auth');
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

Route::controller(HistiriqueController::class)->group(function(){
    Route::get('/tables','historique')->middleware('auth');
    Route::get('/tables','inserthist')->middleware('auth');
});





Route::controller(ArchiveController::class)->group(function(){
    Route::get('/helo', function () {
        return view('helo');
    })->name('helo')->middleware('auth');
    Route::post('/up','up')->name("up")->middleware('auth');
});


Route::get('/layout-static', function () {

    return view('layout-static');

})->name('layout-static')->middleware('auth');

Route::get('/layout-sidenav-light', function () {

      return view('layout-sidenav-light');

})->name('Export')->middleware('auth');




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


Route::get('/professeurs', function () {
    return view('professeur');
})->name('professeurs')->middleware('auth');

Route::get('/cnou', function () {
    return view('cnou');
})->name('cnou')->middleware('auth');


Route::get('/',function(){
    return view('auth.login');
});







