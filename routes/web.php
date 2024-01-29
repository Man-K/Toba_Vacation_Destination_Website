<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlamController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/travel', function () {
    return view('travel', [
        "title" => "Travel"
    ]);
});

Route::get('/kuliner', function () {
    return view('kuliner', [
        "title" => "Kuliner"
    ]);
});

// Route::get('/wisata', function () {
//     return view('Wisata', [
//         "title" => "wisata"
//     ]);
// });

Route::resource('wisata', WisataController::class);
Route::resource('alam', AlamController::class);
Route::resource('tambahhotel', HotelController::class);
Route::resource('tambahtravel', TravelController::class);
Route::resource('tambahkuliner', KulinerController::class);
Route::resource('tambahevent', EventController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('saran', SaranController::class);
