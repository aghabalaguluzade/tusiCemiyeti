<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog\NewsController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::prefix('admin')->group(function() {
    Route::get('/about', [AboutController::class, 'AboutIndex'])->name('AboutIndex');
    Route::post('/about', [AboutController::class, 'AboutUpdate'])->name('AboutUpdate');
    Route::resource('news',NewsController::class);
});