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
Route::get('/counter', \App\Http\Livewire\Counter::class);
Route::get('/calculator', \App\Http\Livewire\Calculator::class);
Route::get('/todolist', \App\Http\Livewire\TodoList::class);
