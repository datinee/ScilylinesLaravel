<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FerryController;
use App\Models\Ferry;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('ferry', FerryController::class);
    Route::get('/pdf', [FerryController::class, 'creerPDF'])->name('pdf');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes du profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Page de connexion
require __DIR__ . '/auth.php';
