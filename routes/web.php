<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Coin;
// Route::get('/', function () {
//     return view('welcome');
// });

// TAMPILAN UTAMA
Route::get('/', function () {
    return view('users.home');
})->name('home');
Route::get('/incoming', function () {
    return view('users.incoming');
})->name('incoming');
Route::get('/trending', function () {
    return view('users.trending');
})->name('trending');
Route::get('/list', function () {
    return view('users.list');
})->name('list');
use App\Http\Controllers\TopupController;

Route::get('/topup', function () {
    return view('users.dasboard_topup');
})->name('topup');

Route::post('/topup', [TopupController::class, 'store']);
Route::get('/topup-status/{id}', function ($id) {
    $coin = Coin::find($id);
    if (!$coin) {
        return response()->json(['error' => 'Not found'], 404);
    }

    return response()->json([
        'status' => 'pending',
        'price' => $coin->price,
        'expires_at' => now()->addMinutes(15),
        ]);
    });

// TAMPILAN DETAIL
Route::get('/detail', function () {
    return view('users.detail_anime');
})->name('detail');



// AUTHENTICATION ROUTES
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/user-dashboard', function () {
//     return 'Selamat datang user';
// })->middleware('auth');

// Route::get('/admin-dashboard', function () {
//     return 'Selamat datang admin';
// })->middleware('auth');
