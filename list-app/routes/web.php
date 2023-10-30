<?php

use App\Http\Controllers\todosCntroller;
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




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('todo/index', [todosCntroller::class,'index'])->name('todos.index');
Route::get('todo/crate',  [todosCntroller::class,'crate'])->name('todos.crate');
Route::get('todo/store', [todosCntroller::class,'store'])->name('todos.store');
Route::get('todo/show/{id}', [todosCntroller::class,'show'])->name('todos.show');
Route::get('todo/{id}/edit', [todosCntroller::class,'edit'])->name('todos.edit');
Route::put('todo/update', [todosCntroller::class,'update'])->name('todos.update');
Route::delete('todo/delete', [todosCntroller::class,'delete'])->name('todos.delete');
