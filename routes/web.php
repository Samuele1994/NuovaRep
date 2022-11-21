<?php

use App\Http\Controllers\ContattiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibriController;

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

Route::get('/', [HomeController:: class, 'index'])->name('home');

Route::get('/libri/{id?}', [LibriController:: class, 'index'])->name('libri');

Route::get('/contatti', [ContattiController:: class, 'index'])->name('contatti');
