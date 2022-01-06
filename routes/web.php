<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\BeerTypeController;
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

Route::get('/admin', [Controller::class, 'admin'])->name('admin');
Route::post('/admin/type', [BeerTypeController::class, 'upload'])->name('admin.upload.type');
Route::post('/admin/brewery', [BreweryController::class, 'upload'])->name('admin.upload.brewery');
Route::post('/admin/beer', [BeerController::class, 'upload'])->name('admin.upload.beer');
Route::post('admin/delete', [Controller::class, 'deleteAllData'])->name('delete');

Route::get('/typer', [BeerTypeController::class, 'index'])->name('beertypes');
Route::get('/typer/{type}', [BeerTypeController::class, 'show'])->name('beertypes.show');
