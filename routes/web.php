<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Products
Route::get('add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');

//Category
Route::get('category', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
Route::post('category', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');

//Tags
Route::get('tag', [App\Http\Controllers\AttributeController::class, 'attributes'])->name('attributes');

//Attributes
Route::get('attributes', [App\Http\Controllers\CategoryController::class, 'tags'])->name('tags');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
