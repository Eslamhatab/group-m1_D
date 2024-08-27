<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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





    Route::get('/' , [MainController::class , 'home'])->name('home');




Route::get('parts/' , [MainController::class , 'index'])->name('home');
//About Page
Route::get('/parts/about' , [MainController::class , 'about'])->name('about');
