<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
//Language Translation

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/companies', [App\Http\Controllers\HomeController::class, 'companies'])->name('companies');
Route::get('/jobseeker', [App\Http\Controllers\HomeController::class, 'jobseeker'])->name('jobseeker');
Route::get('/universities', [App\Http\Controllers\HomeController::class, 'universities'])->name('universities.blade');

