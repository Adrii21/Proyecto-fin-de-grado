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
Route::get('/home/cita', [App\Http\Controllers\FormController::class, 'create'])->name('form.index');
Route::post('/home/cita', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/home/{form}/editar', [App\Http\Controllers\FormController::class, 'edit'])->name('form.edit');
Route::put('/home/{form}', [App\Http\Controllers\FormController::class, 'update'])->name('form.update');



Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->middleware('can:admin.index')->name('admin.index');
Route::get('/dashboard/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');


Route::get('/home/profesor', [App\Http\Controllers\UserController::class, 'index'])->middleware('can:user.index')->name('user.index');
Route::get('home/usuario', [App\Http\Controllers\UserController::class, 'show'])->middleware('can:user.show')->name('user.show');


Route::get('home/{form}', [App\Http\Controllers\FormController::class, 'show'])->middleware('can:form.show')->name('form.show');


Route::get('home/profesor/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
