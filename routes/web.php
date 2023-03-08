<?php

use App\Http\Controllers\adsApproveController;
use App\Http\Controllers\adsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\usersController;
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

/* auth routes */
Auth::routes();
Route::prefix('admin')->group(function () {

    /* dashboard routes */
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    /* ads route */
    Route::controller(adsController::class)
        ->as('ads.')
        ->group(function () {
            Route::get('/ads-list', 'adsList')->name('ads-list');
            Route::post('/save-ads', 'saveAds')->name('save-ads');
            Route::get('/get-ads', 'getAds')->name('get-ads');
            Route::post('/delete-ads', 'deleteAds')->name('delete-ads');
            Route::post('/get-search-results', 'getSearchResult');
            Route::post('/update-product-category', 'updateProductCategory');
            Route::post('/update-product-sub-category', 'updateProductSubCategory');
            Route::post('/update-city', 'updateCity');
            Route::post('/update-ads-category', 'updateAdsCategory');
            Route::post('/delete-category', 'deleteProductCategory');
            Route::post('/delete-sub-category', 'deleteProductSubCategory');
            Route::post('/delete-city', 'deleteCity');
            Route::post('/delete-ads-category', 'deleteAdsCategory');
            Route::get('/view-ads/{recordid}/{action}', 'viewAds')->name('view-ads');
            Route::post('/get-ads-details', 'getAdsDetails');
            Route::post('/update-ads', 'updateAds');
        });

    /* profile routes */
    Route::controller(profileController::class)
        ->prefix('profile')
        ->as('profile.')
        ->group(function () {
            Route::get('/', 'index')->name('profile');
            Route::post('/save-profile', 'saveProfile');
            Route::post('/deactivate-profile', 'deactivateProfile');
            Route::post('/save-social-links', 'saveSocialLinks');
            Route::post('/change-password', 'changePassword');
        });

    /* ads approval */
    Route::controller(adsApproveController::class)
        ->prefix('ads-approve')
        ->as('ads-approve.')
        ->group(function () {
            Route::get('/', 'adsApprove')->name('index')->middleware(['restrict-page']);
            Route::get('/approve-ads/{recordid}', 'approveAds')->name('approve-ads')->middleware(['restrict-page']);
            Route::get('/get-unapprove-ads', 'getUnApprovedAds')->name('get-unapproved-ads');
            Route::post('/delete-approval-request', 'deleteApprovalRequest');
            Route::post('/approve-ad', 'approveThisAd');
            Route::get('/get-all-unapproved-ads', 'getAllUnApprovedAds');
        });

    /* users */
    Route::controller(usersController::class)
        ->prefix('users')
        ->as('users.')
        ->group(function () {
            Route::get('/', 'usersList')->name('index')->middleware(['restrict-page']);
            Route::get('/get-all-users', 'getAllusers')->name('get-all-users')->middleware(['restrict-page']);
            Route::get('/show-user-details/{userid}', 'showUserDetails')->name('show-user-details')->middleware(['restrict-page']);
            Route::get('/get-unapproved-ads', 'getUnApprovedAds')->name('get-unapproved-ads')->middleware(['restrict-page']);
            Route::get('/show-approve-ad/{recordid}/{action}/{userid}', 'viewAd')->name('show-approve-ad')->middleware(['restrict-page']);
            Route::get('/get-approved-ads/{userid}', 'getApprovedAds')->name('get-approved-ads')->middleware(['restrict-page']);
        });
});
