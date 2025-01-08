<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProcessController;
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


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/loan-details', [DashboardController::class, 'loanDetails'])->name('loan.details');
    Route::get('/process-data', [DashboardController::class, 'processData'])->name('process.data');
    Route::post('/process-data/create-table', [ProcessController::class, 'createTable'])->name('process.createTable');
});

Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});
