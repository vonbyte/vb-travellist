<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'packinglists'], function () {
    Route::get('/new', [\App\Http\Controllers\PackingListController::class, 'new'])->name('packinglist.new');
    Route::post('/store', [\App\Http\Controllers\PackingListController::class, 'store'])->name('packinglist.store');
    Route::get('/', [\App\Http\Controllers\PackingListController::class, 'list'])->name('packinglist.list');
});

require __DIR__.'/auth.php';
