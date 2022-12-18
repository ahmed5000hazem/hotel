<?php

use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Admin\RoomsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/rooms-avilability/{hotel}', [BookingController::class, 'checkRoomsAvilabilty']);

Route::get('/services', function () {
    return view('service');
});

Route::get('/rooms', [RoomsController::class, 'getAllRooms']);
Route::middleware('auth')->get('/rooms/{room}/book', [RoomsController::class, 'bookRoom']);
Route::middleware('auth')->post('/rooms/{room}/book', [RoomsController::class, 'storeBooking']);

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::prefix('hotels')->group(function () {
        Route::get('/', [HotelsController::class, 'index']);
        Route::get('/create', [HotelsController::class, 'create']);
        Route::post('/store/', [HotelsController::class, 'store']);
        Route::post('/delete/{hotel}', [HotelsController::class, 'destroy']);
    });

    Route::prefix('rooms')->group(function () {
        Route::get('/', [RoomsController::class, 'index']);
        Route::get('/create', [RoomsController::class, 'create']);
        Route::post('/store/', [RoomsController::class, 'store']);
        Route::post('/delete/{room}', [RoomsController::class, 'destroy']);
    });

    Route::prefix('reservations')->group(function () {
        Route::get('/', [BookingsController::class, 'index']);
        
        Route::get('/create', [BookingsController::class, 'create']);
        Route::post('/store/', [BookingsController::class, 'store']);
        Route::post('/confirm/{reservation}', [BookingsController::class, 'confirm']);
        Route::post('/delete/{reservation}', [BookingsController::class, 'destroy']);
    });
    
});