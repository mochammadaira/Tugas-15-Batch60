<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoriesController;

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


Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/table', [HomeController::class, 'tabel']);

Route::get('/data-table', [HomeController::class, 'data']);
Route::get('/home', function() {
    return view('page.main');
});
Route::get('/biodata', function () {
    return view('page.biodata');
});

Route::get('/selamatdatang', [MainController::class, 'kirim']);

//CRUD Categories
//Tambah Category
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'storeCategory']);

//Read data category
Route::get('/category', [CategoriesController::class, 'indexCategory']);

//Tampilan detail data category
Route::get('/category/{categories_id}', [CategoriesController::class, 'showCategory']);

//Edit data caregory
Route::get('/category/{categories_id}/edit', [CategoriesController::class, 'editCategory']);

//Update data category
Route::put('/category/{categories_id}', [CategoriesController::class, 'updateCategory']);

//Delete data category
Route::delete('/category/{categories_id}', [CategoriesController::class, 'destroyCategory']);
