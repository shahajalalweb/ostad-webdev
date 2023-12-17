<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DashboardController;
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
});Route::get('/products', [ProductController::class, 'index']);

// Route to display the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create']);

// Route to store a newly created product
Route::post('/products', [ProductController::class, 'store']);

// Route to display a specific product's details
Route::get('/products/{id}', [ProductController::class, 'show']);

// Route to display the form for editing a specific product
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// Route to update a specific product
Route::put('/products/{id}', [ProductController::class, 'update']);

// Route to delete a specific product
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Route to display sales transaction history
Route::get('/sales', [SaleController::class, 'index']);

// Route to store a new sale record
Route::post('/sales', [SaleController::class, 'store']);

// Additional routes for sales-related functionalities, if needed
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');