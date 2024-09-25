<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Guest routes (for users who are not authenticated)
Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/loginvalidate', [UserController::class, 'loginvalidate'])->name('loginvalidate');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/registervalidate', [UserController::class, 'registervalidate'])->name('registervalidate');
    
});

// Public route
Route::get('/', function () {
    return view('welcome');
});

// Authenticated routes (for users who are logged in)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     Route::get('/admin/overview', [DashboardController::class, 'overview'])->name('overview');
     Route::get('/admin/employee', [EmployeeController::class, 'employee'])->name('employee');

    Route::post('/admin/store_inventory', [DashboardController::class, 'store'])->name('store_inventory');
    Route::post('/admin/employees_store', [EmployeeController::class, 'employees_store'])->name('employees_store');
     Route::delete('/admin/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


    

    Route::get('/admin/transaction', [DashboardController::class, 'transaction'])->name('transaction');
    Route::get('/admin/inventory', [DashboardController::class, 'inventory'])->name('inventory');
    Route::get('/admin/reports', [DashboardController::class, 'reports'])->name('reports');
    Route::get('/admin/products', [DashboardController::class, 'products'])->name('products');
    Route::post('/admin/store_inventory', [DashboardController::class, 'store_inventory'])->name('store_inventory');

    // Profile routes (requires authentication)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include auth routes (default authentication routes like password reset, email verification, etc.)
require __DIR__.'/auth.php';
