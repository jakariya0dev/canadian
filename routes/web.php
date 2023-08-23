<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Front end Route
Route::view('/', 'frontend.app')->name('home');
Route::view('/tos', 'frontend.about')->name('tos');
Route::view('/p-policy', 'frontend.about')->name('p.policy');


// User Route
Route::view('/user-login-form', 'backend.user-login')->name('user.login.form');
Route::get('/user-login', [UserController::class, 'userLogin'])->name('user.login');


// Admin Route
Route::get('/admin-login', [UserController::class, 'getAllProfile'])->name('admin.login');
Route::view('/new-profile', 'backend.admin.new-form')->name('profile.new');
Route::get('/all-profile', [UserController::class, 'getAllProfile'])->name('profile.all');
Route::get('/view-profile/{id}', [UserController::class, 'getSingleProfile'])->name('profile.view');
Route::post('/add-profile', [UserController::class, 'addNewProfile'])->name('profile.add');
Route::get('/delete-profile/{id}', [UserController::class, 'deleteProfile'])->name('profile.delete');
Route::get('/search-profile', [UserController::class, 'searchProfile'])->name('profile.search');
Route::get('/edit-profile/{id}', [UserController::class, 'editProfile'])->name('profile.edit');
Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('profile.update');

