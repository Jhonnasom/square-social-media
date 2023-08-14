<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//to create tokens to consume api from postman
Route::get('/tokens/create', function () {
    $token = Auth()->user()->createToken('main-token');
 
    return ['token' => $token->plainTextToken];
});

Route::get('/dashboard', function () {
    return redirect('/feed');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/update_image', [ProfileController::class, 'update_image'])->name('profile.update_image');
    Route::resource('/feed', PostController::class);
    Route::get('/friends', function () {
        return Inertia::render('Friends');
    })->name('friends');
    Route::get('/photos', function () {
        return Inertia::render('Photos');
    })->name('photos');
});

require __DIR__.'/auth.php';
