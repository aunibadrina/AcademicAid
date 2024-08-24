<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScheduleSContoller;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;


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
Route::view('sort','sort');




Route::get('/session',[SessionController::class, 'index'])->name('session.index');
Route::get('/session/createS',[SessionController::class, 'createS'])->name('session.createS');
Route::post('/session',[SessionController::class, 'store'])->name('session.store');
Route::get('/session/{session}/edit',[SessionController::class, 'edit'])->name('session.edit');
Route::put('/session/{session}/update',[SessionController::class, 'update'])->name('session.update');
Route::delete('/session/{session}/destroy',[SessionController::class, 'destroy'])->name('session.destroy');
Auth::routes();



Route::get('/dashboardS',[StudentController::class, 'index'])->name('student.index');
Route::get('/studentschedule',[ScheduleSContoller::class, 'schedule'])->name('student.schedule');

Route::get('/dashboardT',[TutorController::class, 'index'])->name('Tutor.index');
Route::get('/dashboardT/createS',[TutorController::class, 'createS'])->name('Tutor.createS');
Route::post('/dashboardT',[TutorController::class, 'store'])->name('Tutor.store');
Route::get('/dashboardT/{dashboardT}/edit',[TutorController::class, 'edit'])->name('Tutor.edit');
Route::put('/dashboardT/{dashboardT}/update',[TutorController::class, 'update'])->name('Tutor.update');
Route::delete('/dashboardT/{dashboardT}/destroy',[TutorController::class, 'destroy'])->name('Tutor.destroy');


Route::get('/userhome', [HomeController::class, 'index'])->name('user.home');   //user dashboard page
//Route::get('/userhome/create', [HomeController::class, 'create'])->name('user.create');
//Route::get('/userhome', [HomeController::class, 'store'])->name('user.store');
//Route::get('/userhome/{userhome}/edit', [HomeController::class, 'edit'])->name('user.edit');
//Route::get('/userhome/{userhome}/update', [HomeController::class, 'update'])->name('user.update');
//Route::get('/userhome/{userhome}/destroy', [HomeController::class, 'destroy'])->name('user.destroy');




Route::get('/userProfile', [App\Http\Controllers\User\HomeController::class, 'userProfile'])->name('userProfile');  //user profile page
Route::post('/updateProfile', [App\Http\Controllers\Auth\HomeController::class, 'updateProfile'])->name('update.profile'); //update profile fx




Route::get('/student/register', [StudentController::class, 'showRegistrationForm']);
Route::post('/student/register', [StudentController::class, 'processRegistration']);

Route::get('/tutor/apply', [TutorController::class, 'showApplicationForm']);
Route::post('/tutor/apply', [TutorController::class, 'submitApplication']);
Route::middleware(['tutor.approval'])->group(function () {
    return redirect('/tutor-not-approved');
});



Route::get('/auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.home')->middleware('isAdmin');   //admin dashboard page
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/auth/tutor-applications', [AdminController::class, 'showTutorApplications']);
Route::post('/auth/approve-tutor/{id}', [AdminController::class, 'approveTutor'])->name('admin.approveTutor');});



Route::get('/tutor-not-approved', [LoginController::class, 'showTutorNotApproved'])->name('tutor-not-approved');

Route::get('/userList', [App\Http\Controllers\Auth\HomeController::class, 'userList'])->name('userList');  //user list page
Route::get('/userList/{user}/edit',[App\Http\Controllers\Auth\HomeController::class, 'editUser'])->name('admin.editUser'); //edit user
Route::put('/userList/{user}/update',[App\Http\Controllers\Auth\HomeController::class, 'updateUser'])->name('updateUser'); //user update
Route::delete('/userList/{user}/destroy',[App\Http\Controllers\Auth\HomeController::class, 'destroyUser'])->name('destroyUser'); //delete user











