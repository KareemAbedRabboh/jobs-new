<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UniversitiesController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobSeekerSkillsController;
use App\http\Controllers\CitiesController;
use App\http\Controllers\MajorsController;
use App\http\Controllers\AcademicdegreeController;
use App\http\Controllers\FilesController;
use App\http\Controllers\FileTypesController;






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

// Company  routes
Route::resource('/companies', CompanyController::class);



// Job Seeker  routes
Route::resource('/jobseeker', JobSeekerController::class);

// University  routes
Route::resource('/universities', UniversitiesController::class);

//jobs route
Route::resource('/jobs', JobsController::class);

Route::resource('/jobseeker_skills', JobSeekerSkillsController::class);

Route::resource('/cities', CitiesController::class);

Route::resource('/majors', MajorsController::class);

Route::resource('/academicdegree', AcademicdegreeController::class);

Route::resource('/files', FilesController::class);

Route::resource('/filetypes', FileTypesController::class);






