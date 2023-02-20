<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

include('frontend-routes/frontend-web.php');

Route::prefix('admin')->group(function () {

    /* auth routes */
    Auth::routes(['register' => false]);

    /* dashboard routes */
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});
