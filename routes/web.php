<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreakfastController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\DinnerController;
use App\Http\Controllers\MealtypeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Jenis  Menu
Route::get('/mealtype', [MealtypeController::class, 'index'])->name('mealtype.index');
Route::get('/mealtype/create', [MealtypeController::class, 'create'])->name('mealtype.create');
Route::post('/mealtype', [MealtypeController::class, 'store'])->name('mealtype.store');
Route::get('/mealtype/{mealtype_id}/edit', [MealtypeController::class, 'edit'])->name('mealtype.edit');
Route::put('/mealtype/{mealtype_id}', [MealtypeController::class, 'update'])->name('mealtype.update');
Route::delete('/mealtype/{mealtype_id}', [MealtypeController::class, 'destroy'])->name('mealtype.destroy');

// Menu
Route::get('/breakfast', [BreakfastController::class, 'index']);
Route::get('/breakfast/create', [BreakfastController::class, 'create'])->name('breakfast.create');
Route::post('/breakfast', [BreakfastController::class, 'store'])->name('breakfast.store');
Route::get('/lunch', [LunchController::class, 'index']);
Route::get('/dinner', [DinnerController::class, 'index']);
