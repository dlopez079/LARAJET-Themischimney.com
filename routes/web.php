<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects', function () {
    return view('/projects/show');
})->name('projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/clients', function () {
    return view('/clients.show');
})->name('clients');

Route::middleware(['auth:sanctum', 'verified'])->get('/prime', function () {
    return view('/prime.show');
})->name('prime');

Route::middleware(['auth:sanctum', 'verified'])->get('/general_contractors', function () {
    return view('/general_contractors.show');
})->name('general_contractors');

Route::middleware(['auth:sanctum', 'verified'])->get('/timesheets', function () {
    return view('/timesheets.show');
})->name('timesheets');

Route::middleware(['auth:sanctum', 'verified'])->get('/comments', function () {
    return view('/comments.show');
})->name('comments');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects.edit', function () {
    return view('/projects.edit');
})->name('projects.edit');
