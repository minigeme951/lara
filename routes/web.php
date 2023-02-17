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
Route::get('/about', function () {
    return view('about');
});
Route::get('/catalog',[App\Http\Controllers\catalog::class,'listall'])->name('catalog');
Route::get('/catalog/filter/{id}',[App\Http\Controllers\catalog::class,'filterr'])->name('catalog');
Route::get('/catalog/sort/{name}/{sort}',[App\Http\Controllers\catalog::class,'listall'])->name('catalog');
Route::get('/catalog/one/{id}',[App\Http\Controllers\catalog::class,'oneprod'])->name('oneprod');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
