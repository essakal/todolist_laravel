<?php

use App\Http\Controllers\TodoController;
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

// Route::resource('todo', TodoController::class);

Route::group(["prefix"=>"todo"], function(){
    Route::get('/index', [TodoController::class, 'index'])->name('todo.index');
    Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
    Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
});