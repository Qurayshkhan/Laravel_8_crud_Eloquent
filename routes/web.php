<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentscontroller;

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
Route::get('/',[studentscontroller::class,'index'])->name('index');
Route::post('/',[studentscontroller::class,'create'])->name('create');
Route::get('edit/{id}',[studentscontroller::class,'edit'])->name('edit');
Route::put('edit/{id}',[studentscontroller::class,'update'])->name('update');
Route::get('delete/{id}',[studentscontroller::class,'destroy'])->name('destroy');

