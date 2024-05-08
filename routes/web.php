<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;
use App\Http\Controllers\ClientController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Programms\ProgramController;
use App\Http\Controllers\Programms\NutritionController;
use Laravel\Cashier\Http\Controllers\WebhookController;

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

//Route::get('/test', [BotController::class, 'start']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/programme-gratuit', function () {
    return view('programmes.free');
})->name('freeProgram');

Route::post('/programme-gratuit',[ProgramController::class,'sendProgram'])->middleware('auth')->name('sendProgram');

Route::get('/thanks',function(){

    return view('thanks');
})->name('thanks');


Route::post('/stripe/webhook',[WebhookController::class,'handleWebhook'])->name('cashier.webhook');
Route::post('/client/payment/stripe', [ClientController::class, 'clientPaymentStripe'])->name('client.payment.stripe');
Route::get('/client/payment/form', [ClientController::class, 'clientPaymentForm'])->name('client.payment.stripe');


//Route::get('/programme-nutrition', [NutritionController::class, 'index'])->middleware(['auth'])->name('Nutrition');
//Route::post('/programme-nutrition', [NutritionController::class, 'store'])->name('SaveNutrition');

//Route::get('/programme-free', [ProgramController::class, 'index']);
