<?php

use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
    // Website Controller
use App\Http\Controllers\Website\{MainController, ProductsController};
// DashboardController
use App\Http\Controllers\dashboard\DashboardMainController;

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

Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/' , [MainController::class , 'home'])->name('home');
Route::get('/about' ,[MainController::class , 'about'])->name('about');
Route::get('/contact' , [MainController::class , 'contact'])->name('contact');
Route::get('/shop' , [ProductsController::class , 'shop'])->name('shop');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home-auth');

//Dashboard Routing
Route::group([
    'middleware'  => ['auth' , 'dashboard']
], function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/' , [DashboardMainController::class , 'index'])->name('dashboard');
            Route::resource('/categories' , CategoryController::class);
            Route::get('/category/delete' , [CategoryController::class , 'delete'])->name('categories.delete');
            Route::get('/category/restore/{id}' ,[CategoryController::class , 'restore'])->name('categories.restore');
            Route::delete('/category/forceDelete/{id}' , [CategoryController::class , 'forceDelete'])->name('categories.forceDelete');
        });
    });
    });


