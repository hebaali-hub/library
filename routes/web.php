<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//select
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/show/{id}', [BookController::class,'show'])->name('books.show');


//categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');

// auth
Route::middleware('isguest')->group(function () {
Route::get('/register',[AuthController::class,'register'])->name('auth.reg');
Route::post('/handlereg', [AuthController::class, 'handlereg'])->name('auth.handlereg');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/handlelog', [AuthController::class, 'handlelog'])->name('auth.handlelog');
});
Route::middleware('islogin')->group(function(){
    //create
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

    //update
    Route::get('/books/updatefm/{id}', [BookController::class, 'updatefm'])->name('books.updatefm');
    Route::post('/books/update/{id}', [BookController::class, 'update'])->name('books.update');

    //delete
    Route::get('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');


    //create
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

    //update
    Route::get('/categories/updatefm/{id}', [CategoryController::class, 'updatefm'])->name('categories.updatefm');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

    //delete
    Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


});