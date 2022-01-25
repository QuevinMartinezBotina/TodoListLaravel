<?php

use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoryController;
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

/* Route::get('/todos', function () {
    return view('todos.index');
})->name('inicio'); */

Route::get('/index', [TodosController::class,'index'])->name('index');

Route::post('/store', [TodosController::class,'store'])->name('store');

Route::get('/show/{id}', [TodosController::class,'show'])->name('todos-show');

Route::patch('/update/{id}', [TodosController::class,'update'])->name('todos-update');

Route::delete('/destroy/{id}', [TodosController::class,'destroy'])->name('todos-destroy');

/* Categorys */
Route::resource('categorys', CategoryController::class);
