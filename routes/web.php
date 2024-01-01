<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryToProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAuthController;
use App\Models\ProductImage;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/auth', [UserAuthController::class, 'index'])->name('user.auth');
Route::post('/user-login', [UserAuthController::class, 'login'])->name('user.auth.login');
Route::post('/user-register', [UserAuthController::class, 'register'])->name('user.auth.register');


Route::get('category/{category}/products', [CategoryToProductController::class, 'showCategoryWiseProducts'])->name('category.products');
Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::post('/delete-cart', [CartController::class, 'deleteToCart']);

require __DIR__.'/auth.php';
