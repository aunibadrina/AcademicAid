<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;

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

Route::view('/','landing');
Route::view('login','login');
Route::view('home','home');

Route::get('/Tutor',[TutorController::class, 'index'])->name('tutor.index');
Route::get('/Tutor/createS',[TutorController::class, 'createS'])->name('tutor.createS');

