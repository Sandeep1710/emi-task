<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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


Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});
