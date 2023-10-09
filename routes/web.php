<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardTransactionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/details/{id}', [DetailController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/success', [CartController::class, 'success']);
Route::get('/register/success', [RegisteredUserController::class, 'success']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/products', [DashboardProductController::class, 'index']);
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create']);
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'detail']);
Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index']);
Route::get('/dashboard/transactions/{id}', [DashboardTransactionController::class, 'details']);
Route::get('/dashboard/settings', [DashboardSettingController::class, 'store']);
Route::get('/dashboard/account', [DashboardSettingController::class, 'account']);

// Route::prefix('admin')->namespace('')

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
