<?php

use App\Http\Controllers\PublikController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublikController::class, 'home'])->name('home.publik');
Route::get('/about', [PublikController::class, 'about'])->name('about.publik');
Route::get('/contact', [PublikController::class, 'contact'])->name('contact.publik');
// Route::post('/contact/send', [MessageController::class, 'store'])->name('contact.send');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
