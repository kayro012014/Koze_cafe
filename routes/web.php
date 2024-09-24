<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/overview', [DashboardController::class, 'overview'])->name('overview');

    Route::post('/admin/store_inventory', [DashboardController::class, 'store'])->name('store_inventory');

    Route::get('/admin/transaction', [DashboardController::class, 'transaction'])->name('transaction');
    Route::get('/admin/inventory', [DashboardController::class, 'inventory'])->name('inventory');
    Route::get('/admin/reports', [DashboardController::class, 'reports'])->name('reports');
    Route::get('/admin/products', [DashboardController::class, 'products'])->name('products');
    Route::post('/admin/store_inventory', [DashboardController::class, 'store_inventory'])->name('store_inventory');
});
Route::get('/dashboard', action: function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// require __DIR__ . '/auth2.php';
