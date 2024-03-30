<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;


// User Routes

// Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Register
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// create user
Route::post('/users', [UserController::class, 'store']);

// authenticate
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// logout
Route::post('/logout',[ UserController::class, 'logout'])->middleware('auth');


// Details Routes

// Home route
Route::get('/', [DetailController::class, 'index'])->middleware('auth');

// filter
Route::post('/search', [DetailController::class, 'filter'])->middleware('auth');

// edit page
Route::get('/edit/{id}', [DetailController::class, 'edit'])->middleware('auth');

// update
Route::put('/edit/{id}', [DetailController::class, 'update'])->middleware('auth');

// delete
Route::get('/delete/{id}', [DetailCOntroller::class, 'delete'])->middleware('auth');
