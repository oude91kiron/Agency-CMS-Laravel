<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\LandController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->middleware('auth', 'verified')->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /**
     * User route
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Agency Route
     */
    Route::get('/agency.view', [AgencyController::class, 'index'])->name('agency.view');
    Route::get('/agency.create', [AgencyController::class, 'create'])->name('agency.create');
    Route::get('/agency.store', [AgencyController::class, 'store'])->name('agency.store');
    Route::patch('/agency.update', [AgencyController::class, 'update'])->name('agency.update');
    Route::delete('/agency.destroy', [AgencyController::class, 'destroy'])->name('agency.destroy');



    /**
     * land Route
     */
    Route::get('/land.view', [landController::class, 'index'])->name('land.view');
    Route::get('/land.create', [landController::class, 'create'])->name('land.create');
    Route::get('/land.store', [landController::class, 'store'])->name('land.store');
    Route::patch('/land.update', [landController::class, 'update'])->name('land.update');
    Route::delete('/land.destroy', [landController::class, 'destroy'])->name('land.destroy');



});

require __DIR__.'/auth.php';
