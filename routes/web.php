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




Route::resource('category', App\Http\Controllers\CategoryController::class);

/*Route::resource('image', App\Http\Controllers\ImageController::class);*/

/*Route::resource('like', App\Http\Controllers\LikeController::class);

Route::resource('collection', App\Http\Controllers\CollectionController::class);

Route::resource('comment', App\Http\Controllers\CommentController::class);*/

Route::get('portfolio',[\App\Http\Controllers\PagesController::class,'portfolio'])->name('portfolio');

Route::get('wedding',[\App\Http\Controllers\PagesController::class,'wedding'])->name('wedding');

Route::get('album',[\App\Http\Controllers\PagesController::class,'album'])->name('album');

Route::get('/',[\App\Http\Controllers\PagesController::class,'home'])->name('welcome');

Route::get('/approve/image/{image}',[\App\Http\Controllers\ImageController::class,'approve'])->name('admin.image.approve');

Route::get('image/{image}',[\App\Http\Controllers\PagesController::class,'show'])->name('image.item.show');


Route::get('like/{image}',[\App\Http\Controllers\LikeController::class,'store'])->name('like');

Route::get('collection/{image}',[\App\Http\Controllers\CollectionController::class,'store'])->name('collection');
