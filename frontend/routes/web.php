<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Blog\EventController;
use App\Http\Controllers\Blog\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FamousMenController;
use App\Http\Controllers\Gallery\PhotoController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OrdubadController;
use App\Http\Controllers\VideosController;
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

Route::get('/', [HomeController::class,'homeIndex'])->name('homeIndex');
Route::get('/search', [HomeController::class, 'searchIndex'])->name('search');
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
Route::get('/general_information',[OrdubadController::class, 'ordubadIndex'])->name('general_information');
Route::get('/production',[OrdubadController::class, 'ordubadIndex'])->name('production');
Route::get('/news',[NewsController::class, 'newsIndex'])->name('news');
Route::get('/news/{id}',[NewsController::class, 'newsShow'])->name('newsDetail');
Route::get('/event-blog',[EventController::class, 'eventIndex'])->name('event-blog');
Route::get('/event-blog/{id}',[EventController::class, 'eventShow'])->name('eventShow');
Route::get('/photo', [PhotoController::class, 'photoIndex'])->name('photo');
Route::get('/videos', [VideosController::class, 'videosIndex'])->name('videos');
Route::get('/heroes', [HeroesController::class, 'heroesIndex'])->name('heroes');
Route::get('/contact', [ContactController::class, 'contactIndex'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');
Route::get('/members', [MemberController::class, 'membersIndex'])->name('members');
Route::post('/members', [MemberController::class, 'membersPost'])->name('membersPost');
Route::get('/charitable', [MissionController::class, 'missionIndex'])->name('charitable');
Route::get('/enlightenment', [MissionController::class, 'missionIndex'])->name('enlightenment');
Route::get('/famous-men', [FamousMenController::class, 'famousMenIndex'])->name('famous-men');
Route::get('/famous-detail/{id}',[FamousMenController::class, 'famousShow'])->name('famousDetail');
Route::get('/activity', [ActivityController::class, 'activityIndex'])->name('activity');
Route::get('/creation', [ActivityController::class, 'activityIndex'])->name('creation');
Route::get('/structure', [AboutController::class, 'Index'])->name('structure');
Route::get('/view', [AboutController::class, 'Index'])->name('view');
