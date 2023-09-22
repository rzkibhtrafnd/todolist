<?php

use App\Http\Controllers\Taskcontroller;
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
Route::get('/', [TaskController::class, 'list']);
Route::get('add', [Taskcontroller::class, 'add']);
Route::post('add', [Taskcontroller::class, 'insert']);
Route::get('finish/{id}', [TaskController::class, 'finishTask'])->name('finish');
Route::delete('tdelete/{id}', [TaskController::class, 'destroy'])->name('destroy');



