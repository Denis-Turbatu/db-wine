<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WineController;
use App\Http\Controllers\ProfileController;
use App\Models\Wine;
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

Route::middleware('auth')
    ->prefix('admin') 
    ->name('admin.') 
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('wines', WineController::class);
    });

require __DIR__ . '/auth.php';
