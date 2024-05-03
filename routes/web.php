<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FilterController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\ProductController;

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

//frontend
Route::get('/', [FilterController::class, 'index']);
Route::get('/category', [FilterController::class, 'Category']);
Route::get('fetch-collection', [FilterController::class, 'getCollection']);
Auth::routes();

//management
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/product', ProductController::class);
