<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/udforsk', [BeerController::class, 'index'])->name('udforsk');
Route::get('/udforsk/{beer}', [BeerController::class, 'show'])->name('beer.show');
Route::get('/bryggerier', [BreweryController::class, 'index'])->name('bryggeri');
Route::get('/bryggerier/{brewery}', [BreweryController::class, 'show'])->name('brewery.show');
