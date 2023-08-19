<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::get('/users-profile', [UserController::class, 'getAllProfile'])->name('users.profile');
Route::get('/user-profile/{id}', [UserController::class, 'getSingleProfile'])->name('user.profile');
Route::get('/user-update/{id}', [UserController::class, 'userUpdate'])->name('user.update');
Route::view('/new-profile', 'application-form')->name('new.profile');

Route::post('/add-profile', [UserController::class, 'addNewProfile'])->name('add.profile');
Route::get('/delete-user/{id}', [UserController::class, 'deleteProfile'])->name('user.delete');
Route::get('/search-user', [UserController::class, 'searchProfile'])->name('user.search');
Route::put('/profile-update', [UserController::class, 'updateProfile'])->name('profile.update');
