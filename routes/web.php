<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UniversitiesController;



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

// Home and Profile related routes
Route::get('/', [HomeController::class, 'root'])->name('root');
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');
Route::get('/home', [HomeController::class, 'root']);

// User  routes
Route::get('/users', [UsersController::class, 'index']);

// Company  routes
Route::get('/companies', [CompanyController::class, 'index']);
Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');


// Job Seeker  routes
Route::get('/jobseeker', [JobSeekerController::class, 'index']);

// University  routes
Route::get('/universities', [UniversitiesController::class, 'index']);
