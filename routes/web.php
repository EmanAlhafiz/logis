<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServicesController;
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


Route::get('/',[HomeController::class,'index'])->name('home.view');;

Route::get('/about',[AboutController::class,'index'])->name('about.view');

Route::get('/services',[ServicesController::class,'index'])->name('services.view.all');

Route::get('/services/{id}',[ServicesController::class,'read'])->name('services.view.single');

Route::get('/pricing',[PricingController::class,'index'])->name('pricing.view');

Route::get('/contact',[ContactController::class,'index'])->name('contact.view');

Route::get('/quote',[QuoteController::class,'index'])->name('quote.view');