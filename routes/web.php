<?php

use App\Http\Controllers\BotController;
use App\Http\Controllers\Programms\NutritionController;
use App\Http\Controllers\Programms\ProgramController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', [BotController::class, 'start']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/programme-gratuit', function () {
    return view('programmes.free');
});

Route::get('/programme-nutrition', [NutritionController::class, 'index'])->middleware(['auth'])->name('Nutrition');
Route::post('/programme-nutrition', [NutritionController::class, 'store'])->name('SaveNutrition');

Route::get('/programme-free', [ProgramController::class, 'index']);
