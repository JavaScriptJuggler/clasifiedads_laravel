<?php

use App\Http\Controllers\adsController;
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

    /* ads route */
    Route::controller(adsController::class)
        ->as('ads.')
        ->group(function () {
            Route::get('/ads-list', 'adsList')->name('ads-list');
            Route::post('/save-ads', 'saveAds')->name('save-ads');
            Route::get('/get-ads', 'getAds')->name('get-ads');
            Route::post('/get-search-results', 'getSearchResult');
        });
});
