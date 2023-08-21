<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend.app')->name('home');
Route::view('/tos', 'frontend.about')->name('tos');
Route::view('/p-policy', 'frontend.about')->name('p.policy');

Route::view('/user-login-form', 'backend.user-login')->name('user.login.form');

Route::get('/user-login', [UserController::class, 'userLogin'])->name('user.login');
Route::get('/admin-login', [UserController::class, 'getAllProfile'])->name('admin.login');

Route::get('/users-profile', [UserController::class, 'getAllProfile'])->name('users.profile');
Route::get('/user-profile/{id}', [UserController::class, 'getSingleProfile'])->name('user.profile');
Route::get('/user-update/{id}', [UserController::class, 'userUpdate'])->name('user.update');
Route::view('/new-profile-form', 'backend.application-form')->name('new.profile.form');

Route::post('/add-profile', [UserController::class, 'addNewProfile'])->name('add.profile');
Route::get('/delete-user/{id}', [UserController::class, 'deleteProfile'])->name('user.delete');
Route::get('/search-user', [UserController::class, 'searchProfile'])->name('user.search');
Route::put('/profile-update', [UserController::class, 'updateProfile'])->name('profile.update');
