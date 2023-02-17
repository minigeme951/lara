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
/*Где нас найти */
Route::get('/where', function(){
    return view('wherefound');
} );

Route::get('/', [App\Http\Controllers\hc::class,'about']);
Route::get('/catalog', [App\Http\Controllers\hc::class,'showCatalog']);
Route::get('/catalog/sort/{name}/{nap}',[App\Http\Controllers\hc::class,'showCatalog'] );
Route::get('/catalog/{id}', [App\Http\Controllers\hc::class,'singleProduct']);
Route::get('/catalog/filter/{id}', [App\Http\Controllers\hc::class,'filterr']);
Route::get('/admin',[App\Http\Controllers\Admin::class,'adminshow']);
/*удаление элементов категорий и товаров*/
Route::get('/admin/item/del/{id}',[App\Http\Controllers\Admin::class,'admindelitem']);
Route::get('/admin/cat/del/{id}',[App\Http\Controllers\Admin::class,'admindelcat']);
/* Добавление категории */
Route::get('/admin/cat/',function(){
    return view('addcat');
});
Route::post('/admin/cat/add',[App\Http\Controllers\Admin::class,'adminaddcat']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
