<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\CategoryController;

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

//Rotta home page

Route::get('/', [HomeController::class, 'index'])
->name('index');

//Rotte quadri

Route::get('/quadri', [PictureController::class, 'index'])
->name('pictures.index');

Route::get('/quadri/aggiungi', [PictureController::class, 'create'])
->name('pictures.create');

Route::post('/quadri/aggiungi', [PictureController::class, 'store'])
->name('pictures.store');

Route::get('/quadri/modifica/{id}', [PictureController::class, 'edit'])
->name('pictures.edit');

Route::put('/quadri/modifica/{id}', [PictureController::class, 'update'])
->name('pictures.update');

Route::get('/quadri/{id}', [PictureController::class, 'show'])
->name('pictures.show');

Route::delete('/quadri/elimina/{id}', [PictureController::class, 'destroy'])
->name('pictures.destroy');

Route::get('/quadri/categoria/{id}', [CategoryController::class, 'show'])
->name('categories.show');

Route::get('/quadri/checkout/{id}', [PictureController::class, 'checkout'])
->name('pictures.checkout');

Route::post('/quadri/checkout/{id}', [PictureController::class, 'performCheckout'])
->name('pictures.checkout.perform');

Route::get('/utenti/profilo', [UserController::class, 'profile'])
->name('users.profile')
->middleware(['auth', 'verified']);

Route::get('/utenti/quadri', [UserController::class, 'pictures'])
->name('users.pictures')
->middleware(['auth', 'verified']);

Route::get('/utenti/clienti', [UserController::class, 'customers'])
->name('users.customers')
->middleware(['auth', 'verified']);
