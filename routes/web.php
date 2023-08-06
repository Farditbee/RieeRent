<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index'])->name('index');
Route::view('datakostum', 'landing.datakostum')->name('datakostum');
Route::view('datakostum2', 'landing.datakostum2')->name('datakostum2');
Route::view('datakostum3', 'landing.datakostum3')->name('datakostum3');
Route::view('dataaksesoris', 'landing.dataaksesoris')->name('dataaksesoris');
Route::view('dataaksesoris2', 'landing.dataaksesoris2')->name('dataaksesoris2');
Route::view('dataaksesoris3', 'landing.dataaksesoris3')->name('dataaksesoris3');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    \Auth::logout();
    return redirect('/');
});

Route::group(['prefix' => 'data', 'as' => 'data.', 'middleware' ], function() {

    Route::resource('/katalog', \App\Http\Controllers\KatalogController::class)->except('show');
    Route::resource('/katalog_kostum', \App\Http\Controllers\CustomerKatalogController::class)->except('show');
    Route::resource('/katalog_acc', \App\Http\Controllers\CustomerAccController::class)->except('show');
    Route::resource('/acc', \App\Http\Controllers\AccController::class)->except('show');
    Route::resource('/rental', \App\Http\Controllers\RentalController::class)->except('show');
    // Route::resource('/aksesoris', \App\Http\Controllers\AksesorisController::class)->except('show');
    // Route::resource('/aksesoris', \App\Http\Controllers\AksesorisController::class, 'getAksesoris')->except('show')->name('data.akseosoris');

});

