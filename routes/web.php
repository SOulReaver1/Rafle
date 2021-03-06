<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaffleController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/raffle', RaffleController::class)->only([
    'index', 'store'
]);

Route::post('/raffle/lunch/{id}', [RaffleController::class, 'lunch'])->name('raffles.lunch');

Route::middleware(['auth:sanctum', 'verified'])->group( function () {

    Route::resource('products', ProductsController::class);

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
