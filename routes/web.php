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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', [App\Http\Controllers\TodoController::class, 'index'])->name('index');
//Route::get('todos', 'App\Http\Controllers\TodoController@index');

Route::get('todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('create');
//Route::get('todos/create', 'App\Http\Controllers\TodoController@create');

Route::post('todos', [App\Http\Controllers\TodoController::class, 'store'])->name('store');
//Route::post('todos', 'App\Http\Controllers\TodoController@store');

Route::get('todos/{id}', [App\Http\Controllers\TodoController::class, 'show'])->name('show');
//Route::get('todos/{id}', 'App\Http\Controllers\TodoController@show');

Route::get('todos/{id}/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('edit');
//Route::get('todos/{id}/edit', 'App\Http\Controllers\TodoController@edit');

Route::put('todos/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('update');
//Route::put('todos/{id}', 'App\Http\Controllers\TodoController@update');

Route::delete('todos/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('destroy');
//Route::delete('todos/{id}', 'TApp\Http\Controllers\odoController@destroy');