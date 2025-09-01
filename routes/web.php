<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\EsgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\BoardController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('about-hello', [AboutController::class, 'hello'])->name('about.hello');
Route::get('about-organization', [AboutController::class, 'organization'])->name('about.org');
Route::get('about-people', [AboutController::class, 'people'])->name('about.people');
Route::get('about-ci', [AboutController::class, 'ci'])->name('about.ci');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact-status', [ContactController::class, 'status'])->name('contact.status');

Route::prefix('community')->group(function () {
    Route::get('notice', [BoardController::class, 'notice'])->name('community.notice');
    Route::get('gallery', [BoardController::class, 'gallery'])->name('community.gallery');
    Route::get('newsroom', [BoardController::class, 'newsroom'])->name('community.newsroom');
    Route::get('article-{board}', [BoardController::class, 'show'])->name('community.show');
});

Route::post('donation-auth', [DonationController::class, 'auth'])->name('donation.auth');
Route::get('donation', [DonationController::class, 'index'])->name('donation.index');
Route::post('donation', [DonationController::class, 'store'])->name('donation.store');
Route::get('donation-list', [DonationController::class, 'list'])->name('donation.list');
Route::get('donation-history', [DonationController::class, 'history'])->name('donation.history');

Route::get('esg', [EsgController::class, 'index'])->name('esg.index');
Route::get('esg/program', [EsgController::class, 'program'])->name('esg.program');


// Route::get('/booking', [BookingController::class, 'index'])->name('booking');

require __DIR__ . '/auth.php';
