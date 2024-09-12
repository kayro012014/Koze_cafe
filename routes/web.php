<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/overview', [DashboardController::class, 'overview'])->name('overview');
    Route::get('/admin/products', [DashboardController::class, 'products'])->name('products');
    Route::get('/admin/inventory', [DashboardController::class, 'inventory'])->name('inventory');
    Route::get('/admin/reports', [DashboardController::class, 'reports'])->name('reports');
    Route::get('/admin/pos', [DashboardController::class, 'pos'])->name('pos');
    
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// require __DIR__ . '/auth2.php';
