<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/detail/{id}', 'detail')->name('detail');

});

Route::controller(BlogController::class)->group(function (){
    Route::get('/blog/add', 'index')->name('blog.add');
    Route::post('/blog/new', 'create')->name('blog.new');
    Route::get('/blog/manage', 'manage')->name('blog.manage');
    Route::get('/blog/edit/{id}', 'edit')->name('blog.edit');
    Route::post('/blog/update/{id}', 'update')->name('blog.update');
    Route::get('/blog/delete/{id}', 'delete')->name('blog.delete');
});

