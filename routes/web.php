<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:driver'])->name('dashboard');

// Route::get('/passager/dashboard',function (){
//     return view('passager_dashboard');

// })->middleware(['auth','role:passager'])->name('passager.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// routes/web.php


// Route::get('/profile/driver', [DriverController::class, 'index'])->name('profile.driver');
Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create');
Route::post('/drivers', [DriverController::class,'store'])->name('drivers.store');
Route::resource('drivers', DriverController::class);
Route::patch('drivers/{driver}/update-availability', [DriverController::class, 'updateAvailability']);
Route::get('drivers/{driver}/history-ratings', [DriverController::class, 'showHistoryAndRatings']);
Route::get('drivers/{driver}/update-ratings',[DriverController::class,'showHistoryRating']);

// Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');
// Route::resource('drivers', DriverController()::class);

});

require __DIR__.'/auth.php';
