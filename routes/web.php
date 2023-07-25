<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\PowerSystemController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [LoginController::class,'showLoginForm']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [PowerSystemController::class, 'dashboard'])->name('dashboard');
    Route::post('/save-checklist', [PowerSystemController::class, 'calculateChecklist'])->name('save-checklist');
    Route::post('/save-user-notes', [PowerSystemController::class, 'saveNotes'])->name('save-user-notes');

    Route::get('/numbers', [PowerSystemController::class, 'numbers'])->name('numbers');
    Route::get('/numbers-details/{number}', [PowerSystemController::class, 'numberDetails'])->name('number-details');
    Route::post('/save-transaction', [PowerSystemController::class, 'saveTransaction'])->name('save-transaction');

    Route::get('/ra_dates', [PowerSystemController::class, 'raDates'])->name('ra_dates');
    Route::get('/verify-dates', [PowerSystemController::class, 'verifyDates'])->name('verify-dates');

    Route::get('/transactions/{user_id?}', [PowerSystemController::class, 'transactions'])->name('transactions');

    Route::get('/users', [PowerSystemController::class, 'users'])->name('users');
    Route::post('/update-user/{id}', [PowerSystemController::class, 'updateUser'])->name('update-user');

    Route::get('/favourites', [PowerSystemController::class, 'favourites'])->name('favourites');

//    AJAX Routes
    Route::post('/mark-fav', [PowerSystemController::class, 'markAsFavourite'])->name('mark-fav');
    Route::post('/update-data-field', [PowerSystemController::class, 'updateField'])->name('update-data-field');
    Route::post('/save-remarks', [PowerSystemController::class, 'saveNumberRemarks'])->name('save-remarks');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/sheet-one', [GoogleSheetController::class, 'sheetOne'])->name('sheet.one');
    Route::get('/sheet-two', [GoogleSheetController::class, 'sheetTwo'])->name('sheet.two');
    Route::get('/sheet-three', [GoogleSheetController::class, 'sheetThree'])->name('sheet.three');
    Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
    Route::post('/upload', [UploadController::class, 'create'])->name('sheet.upload');
});

Auth::routes();

