<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\BeerTypeController;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SpiritController;
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

Route::get('/', [Controller::class, 'index'])->name('home');// ->middleware('age.check');

Route::get('/udforsk', [BeerController::class, 'index'])->name('udforsk');
Route::get('/udforsk/{beer}', [BeerController::class, 'show'])->name('beer.show');

Route::get('/bryggerier', [BreweryController::class, 'index'])->name('bryggeri');
Route::get('/bryggerier/{brewery}', [BreweryController::class, 'show'])->name('brewery.show');

Route::get('/login', [Controller::class, 'toLogin'])->name('toLogin');
Route::post('/login', [Controller::class, 'login'])->name('login');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::get('/admin', [Controller::class, 'admin'])->name('admin')->middleware('auth');
Route::post('admin/delete', [Controller::class, 'deleteAllData'])->name('admin.delete');
Route::post('/admin/upload',[Controller::class, 'uploadImage'])->name('admin.image');
Route::post('/admin/announcement', [Controller::class, 'createAnnouncement'])->name('admin.announcement');
Route::post('/admin/rbotd', [Controller::class, 'reset_botd'])->name('admin.reset.botd');
Route::post('/admin/botdd', [Controller::class, 'dropdown_botd'])->name('admin.set.botd');
Route::post('/admin/data', [Controller::class, 'allBeerUpload'])->name('upload_data');
Route::put('/admin/update', [Controller::class, 'changePassword'])->name('change_password');
Route::post('/admin', [Controller::class, 'createAdmin'])->name('admin.create');

Route::get('/typer', [BeerTypeController::class, 'index'])->name('beertypes');
Route::get('/typer/{type}', [BeerTypeController::class, 'show'])->name('beertypes.show');

Route::get('/spiritus', [SpiritController::class, 'index'])->name('spirit_home');
Route::get('/spiritus/destillerier', [SpiritController::class, 'destilleries'])->name('destilleries');
Route::get('/spiritus/udforsk', [SpiritController::class, 'spirits'])->name('spirits');
Route::get('/spiritus/{spirit}', [SpiritController::class, 'show'])->name('spirits.show');
Route::get('/spiritus/destillerier/{destillery}', [SpiritController::class, 'destillery'])->name('destilleries.show');
