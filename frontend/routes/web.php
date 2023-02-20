<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blog\EventController;
use App\Http\Controllers\Blog\NewsController;
use App\Http\Controllers\Gallery\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdubadController;
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


Route::get('/heroes', function () {
    return view('heroes');
})->name('heroes');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/videos', function () {
    return view('videos');
})->name('videos');
Route::get('/activity', function () {
    return view('activity');
})->name('activity');
Route::get('/creation', function () {
    return view('activity');
})->name('creation');
Route::get('/charitable', function () {
    return view('mission');
})->name('charitable');
Route::get('/enlightenment', function () {
    return view('mission');
})->name('enlightenment');
Route::get('/famous-men', function () {
    return view('famous-men');
})->name('famous-men');



Route::get('/', [HomeController::class,'homeIndex'])->name('homeIndex');
Route::get('/about', [AboutController::class,'aboutIndex'])->name('about');
Route::get('/history',[OrdubadController::class, 'ordubadIndex'])->name('history');
Route::get('/monuments',[OrdubadController::class, 'ordubadIndex'])->name('monuments');
Route::get('/folklore',[OrdubadController::class, 'ordubadIndex'])->name('folklore');
Route::get('/customs_traditions',[OrdubadController::class, 'ordubadIndex'])->name('customs_traditions');
Route::get('/nature',[OrdubadController::class, 'ordubadIndex'])->name('nature');
Route::get('/kitchen',[OrdubadController::class, 'ordubadIndex'])->name('kitchen');
Route::get('/flora',[OrdubadController::class, 'ordubadIndex'])->name('flora');
Route::get('/tourism',[OrdubadController::class, 'ordubadIndex'])->name('tourism');
Route::get('/fauna',[OrdubadController::class, 'ordubadIndex'])->name('fauna');
Route::get('/hotel_restaurant',[OrdubadController::class, 'ordubadIndex'])->name('hotel_restaurant');
Route::get('/news',[NewsController::class, 'newsIndex'])->name('news');
Route::get('/news/{id}',[NewsController::class, 'newsShow'])->name('newsDetail');
Route::get('/event-blog',[EventController::class, 'eventIndex'])->name('event-blog');
Route::get('/event-blog/{id}',[EventController::class, 'eventShow'])->name('eventShow');
Route::get('/photo', [PhotoController::class, 'photoIndex'])->name('photo');