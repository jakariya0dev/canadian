<?php

use App\Http\Controllers\addNewUserData;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/new-profile-form', 'application-form');

Route::post('/add-new-profile', [addNewUserData::class, 'addNewProfile'])->name('add-new-profile');
