<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users-profile', [UserController::class, 'getAllProfile'])->name('users.profile');
Route::get('/user-profile/{id}', [UserController::class, 'getSingleProfile'])->name('user.profile');

Route::view('/new-profile-form', 'application-form');

Route::post('/add-new-profile', [UserController::class, 'addNewProfile'])->name('add-new-profile');
Route::get('/delete-user/{id}', [UserController::class, 'deleteProfile'])->name('user.delete');
