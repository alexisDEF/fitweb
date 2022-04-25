<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::middleware('auth')->group(function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('customer',\App\Http\Controllers\CustomerController::class);
    Route::post('customer/addProgram/{id}',[Controllers\CustomerController::class,'storeCustomerProgram']);


    Route::resource('defaultExercise',\App\Http\Controllers\DefaultExerciseController::class);
    Route::get('defaultExercise/create',[\App\Http\Controllers\DefaultExerciseController::class,'create'])->name('create');
    Route::get('defaultExercise/delete/{id}',[\App\Http\Controllers\DefaultExerciseController::class,'delete'])->name('delete');

    Route::resource('program',\App\Http\Controllers\ProgramController::class);

    Route::get('program/defaultExercises/{programId}',[\App\Http\Controllers\ProgramController::class,'defaultExercises'])->name('defaultExercises');
    Route::get('program/addExercise/{programId}/{defaultExerciseId}',[\App\Http\Controllers\ProgramController::class,'addExerciseProgram'])->name('addExerciseProgram');

    Route::get('program/delete/{id}',[\App\Http\Controllers\ProgramController::class,'delete'])->name('delete');
    Route::get('program/todelete/{program}',[\App\Http\Controllers\ProgramController::class,'todelete'])->name('todelete');


});
