<?php

use App\Http\Controllers\frontend\adsController;
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
    view()->share([
        'page_name' => 'Home'
    ]);
    return view('frontend.clasified_ads');
});

/* Route::middleware(['auth', 'user-access:user'])->group(function () {
}); */

/* ads */
Route::controller(adsController::class)
    ->prefix('all-ads')
    ->as('frontend-ads.')
    ->group(function () {
        Route::get('/', 'allAds')->name('index');
    });
