<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Activities\ActivityController;
use App\Http\Controllers\Activities\CreationController;
use App\Http\Controllers\Blog\EventsController;
use App\Http\Controllers\Blog\NewsController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Contact\ContactUsController;
use App\Http\Controllers\Gallery\PhotoController;
use App\Http\Controllers\Gallery\VideoController;
use App\Http\Controllers\Honor\MartyrsController;
use App\Http\Controllers\Mission\CharitableController;
use App\Http\Controllers\Mission\EnlightenmentController;
use App\Http\Controllers\Ordubad\Customs_TraditionsController;
use App\Http\Controllers\Ordubad\FaunaController;
use App\Http\Controllers\Ordubad\FloraController;
use App\Http\Controllers\Ordubad\FolkloreController;
use App\Http\Controllers\Ordubad\HistoryController;
use App\Http\Controllers\Ordubad\Hotel_RestaurantController;
use App\Http\Controllers\Ordubad\KitchenController;
use App\Http\Controllers\Ordubad\MonumentsController;
use App\Http\Controllers\Ordubad\NatureController;
use App\Http\Controllers\Ordubad\TourismController;
use App\Http\Controllers\Pride\FamousPeopleController;
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

Route::prefix('admin')->group(function() {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/about', [AboutController::class, 'AboutIndex'])->name('AboutIndex');
    Route::post('/about', [AboutController::class, 'AboutUpdate'])->name('AboutUpdate');
    Route::resource('activities',ActivityController::class);
    Route::resource('creations',CreationController::class);
    Route::resource('news',NewsController::class);
    Route::resource('events',EventsController::class);
    Route::resource('famous_people',FamousPeopleController::class);
    Route::resource('martyrs',MartyrsController::class);
    Route::resource('photos',PhotoController::class);
    Route::get('/photos/images/{id}/delete',[PhotoController::class,'delete'])->name('photos.delete');
    Route::resource('videos',VideoController::class);
    Route::resource('contacts',ContactController::class);
    Route::get('/contacts_us',[ContactUsController::class, "contactUsIndex"])->name('contactUsIndex');
    Route::post('/contacts_us',[ContactUsController::class, "contactUsPost"])->name('contactUsPost');
    Route::resource('customs_traditions',Customs_TraditionsController::class);
    Route::resource('faunas',FaunaController::class);
    Route::resource('floras',FloraController::class);
    Route::resource('folklores',FolkloreController::class);
    Route::resource('history',HistoryController::class);
    Route::resource('hotel_restaurants',Hotel_RestaurantController::class);
    Route::resource('kitchens',KitchenController::class);
    Route::resource('monuments',MonumentsController::class);
    Route::resource('natures',NatureController::class);
    Route::resource('tourisms',TourismController::class);
    Route::resource('enlightenments',EnlightenmentController::class);
    Route::resource('charitables',CharitableController::class);
});