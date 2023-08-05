<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PictureController;

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

Route::delete('/quadri/elimina/{id}', [PictureController::class, 'destroy'])
->name('pictures.destroy');

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
