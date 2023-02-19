<?php

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
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/heroes', function () {
    return view('heroes');
})->name('heroes');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/event-blog', function () {
    return view('event-blog');
})->name('event-blog');
Route::get('/news-detail', function () {
    return view('news-detail');
})->name('news-detail');
Route::get('/photo', function () {
    return view('photo');
})->name('photo');
Route::get('/history', function () {
    return view('text-inner');
})->name('history');
Route::get('/monuments', function () {
    return view('text-inner');
})->name('monuments');
Route::get('/folklore', function () {
    return view('text-inner');
})->name('folklore');
Route::get('/customs_traditions', function () {
    return view('text-inner');
})->name('customs_traditions');
Route::get('/nature', function () {
    return view('text-inner');
})->name('nature');
Route::get('/kitchen', function () {
    return view('text-inner');
})->name('kitchen');
Route::get('/flora', function () {
    return view('text-inner');
})->name('flora');
Route::get('/tourism', function () {
    return view('text-inner');
})->name('tourism');
Route::get('/fauna', function () {
    return view('text-inner');
})->name('fauna');
Route::get('/hotel_restaurant', function () {
    return view('text-inner');
})->name('hotel_restaurant');
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