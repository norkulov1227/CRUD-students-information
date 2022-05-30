<?php

use App\Http\Controllers\StudentController;
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

Route::get('/student', [StudentController::class, 'index'])->name('index');
Route::get('/student/create', [StudentController::class, 'create'])->name('create');
Route::post('/student/store', [StudentController::class, 'store'])->name('store');
Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('show');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('destroy');
