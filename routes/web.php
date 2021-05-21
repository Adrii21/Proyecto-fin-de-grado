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
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/home/llamadas', [\App\Http\Controllers\UserController::class, 'show'])->name('user.calls');
Route::get('/dashboard/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');
Route::get('home/usuario', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/home/profesor', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('home/profesor/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
