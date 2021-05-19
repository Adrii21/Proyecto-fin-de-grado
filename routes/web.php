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
    return view('auth/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/cita', [App\Http\Controllers\FormController::class, 'index'])->name('form.index');
Route::post('/home/cita', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
//Route::get('/home/{call}/editar', [App\Http\Controllers\FormController::class, 'index'])->name('edit');
Route::delete('/dashboard/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');
