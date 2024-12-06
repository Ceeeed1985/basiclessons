<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('/show/{id}', [PagesController::class, 'show']);

// OPERATIONS SUR LES PRODUITS
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/saveproduct', [ProductController::class, 'saveproduct'])->name('saveproduct');
Route::delete('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
Route::put('/updateproduct/{id}', [ProductController::class, 'updateproduct'])->name('updateproduct');