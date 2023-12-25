<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

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
Route::get('/trips', [TripController::class, 'index']);

// Route for displaying the form to create a new trip
Route::get('/trips/create', [TripController::class, 'create']);

// Route for storing a newly created trip
Route::post('/trips', [TripController::class, 'store']);

// Route for displaying available tickets and purchasing
Route::get('/tickets', [TicketController::class, 'index']);

// Route for processing ticket purchase
Route::post('/tickets/purchase', [TicketController::class, 'purchase']);

// Route for displaying user's booked tickets or reservation details
Route::get('/user/{user}/tickets', [TicketController::class, 'show']);

// Route for canceling a booked ticket
Route::delete('/tickets/{ticket}', [TicketController::class, 'cancelTicket']);
