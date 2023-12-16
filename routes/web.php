<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TravelPackagesController;
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
    return view('/pages/home');
})->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('travel-packages', TravelPackagesController::class);
    Route::resource('travel-packages.gallery', GalleryController::class)->shallow()->only(['index', 'create', 'store', 'destroy']);
    Route::resource('transactions', TransactionController::class)->only(['index', 'show', 'edit', 'update', 'destroy']);

});
