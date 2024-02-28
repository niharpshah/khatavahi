<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomesController;
use App\Http\Controllers\CategoryController;

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
    return view('home');
});

Route::get('/income/create',[IncomesController::class,'create'])->name('income.create');
Route::get('/income/delete/{id}',[IncomesController::class,'delete'])->name('income.delete');
Route::post('/income/update/{id}',[IncomesController::class,'update'])->name('income.update');
Route::get('/income/edit/{id}',[IncomesController::class,'edit'])->name('income.edit');
Route::post('/income',[IncomesController::class,'store']);
Route::get('/income',[IncomesController::class,'view']);

Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category',[CategoryController::class,'store']);
Route::get('/category',[CategoryController::class,'view']);
