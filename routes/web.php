<?php

use App\Http\Controllers\DisplayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-message', [HomeController::class, 'index'])->name('message.add');
    Route::post('/submit-message', [HomeController::class, 'submit'])->name('message.submit');

    Route::get('/add-static-message', [HomeController::class, 'static'])->name('static.add');
    Route::post('/submit-static-message', [HomeController::class, 'static_submit'])->name('static.submit');

    Route::get('/edit-message/{display}', [HomeController::class, 'edit'])->name('message.edit');
    Route::post('/update-message/{display}', [HomeController::class, 'update'])->name('message.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
