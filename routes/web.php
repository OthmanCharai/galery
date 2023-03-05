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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('image', App\Http\Controllers\ImageController::class);

Route::resource('like', App\Http\Controllers\LikeController::class);

Route::resource('collection', App\Http\Controllers\CollectionController::class);

Route::resource('comment', App\Http\Controllers\CommentController::class);


Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('image', App\Http\Controllers\ImageController::class);

Route::resource('like', App\Http\Controllers\LikeController::class);

Route::resource('collection', App\Http\Controllers\CollectionController::class);

Route::resource('comment', App\Http\Controllers\CommentController::class);
