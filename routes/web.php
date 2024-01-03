<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;


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
Route::view('test','test');
Route::view('/student/index','student.index');


Route::get('/session',[SessionController::class, 'index'])->name('session.index');
Route::get('/session/createS',[SessionController::class, 'createS'])->name('session.createS');
Route::post('/session',[SessionController::class, 'store'])->name('session.store');
Route::get('/session/{session}/edit',[SessionController::class, 'edit'])->name('session.edit');
Route::put('/session/{session}/update',[SessionController::class, 'update'])->name('session.update');
Route::delete('/session/{session}/destroy',[SessionController::class, 'destroy'])->name('session.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboardS',[StudentController::class, 'index']);

Route::get('/dashboardT',[TutorController::class, 'index'])->name('Tutor.index');
Route::get('/dashboardT/createS',[TutorController::class, 'createS'])->name('Tutor.createS');
Route::post('/dashboardT',[TutorController::class, 'store'])->name('Tutor.store');
Route::get('/dashboardT/{dashboardT}/edit',[TutorController::class, 'edit'])->name('Tutor.edit');
Route::put('/dashboardT/{dashboardT}/update',[TutorController::class, 'update'])->name('Tutor.update');
Route::delete('/dashboardT/{dashboardT}/destroy',[TutorController::class, 'destroy'])->name('Tutor.destroy');


