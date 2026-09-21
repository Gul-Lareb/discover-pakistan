<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\WhySectionController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\DestinationController;


// Website
Route::get('/', [WebsiteController::class, 'index'])->name('website.home');


// Authentication
Auth::routes([
    'register' => false,
]);


// Admin Routes
Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    // Banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.list');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');


    // Why Section
    Route::get('/whysection', [WhySectionController::class, 'index'])->name('whysection.index');
    Route::get('/whysection/create', [WhySectionController::class, 'create'])->name('whysection.create');
    Route::post('/whysection/store', [WhySectionController::class, 'store'])->name('whysection.store');
    Route::get('/whysection/{id}/edit', [WhySectionController::class, 'edit'])->name('whysection.edit');
    Route::put('/whysection/{id}', [WhySectionController::class, 'update'])->name('whysection.update');
    Route::delete('/whysection/{id}', [WhySectionController::class, 'destroy'])->name('whysection.destroy');


    // Destinations Section
    Route::get('destinations',[DestinationController::class,'index'])->name('destinations.list');
    Route::get('destinations/create',[DestinationController::class,'create'])->name('destinations.create');
    Route::post('destinations/store',[DestinationController::class,'store'])->name('destinations.store');
    Route::get('destinations/edit/{id}',[DestinationController::class,'edit'])->name('destinations.edit');
    Route::post('destinations/update/{id}',[DestinationController::class,'update'])->name('destinations.update');
    Route::get('destinations/delete/{id}',[DestinationController::class,'destroy'])->name('destinations.delete');

    // Explore More Section
    Route::get('explore',[ExploreController::class,'index'])->name('explore.list');
    Route::get('explore/create',[ExploreController::class,'create'])->name('explore.create');
    Route::post('explore/store',[ExploreController::class,'store'])->name('explore.store');
    Route::get('explore/edit/{id}',[ExploreController::class,'edit'])->name('explore.edit');
    Route::post('explore/update/{id}',[ExploreController::class,'update'])->name('explore.update');
    Route::get('explore/delete/{id}',[ExploreController::class,'destroy'])->name('explore.delete');

    // Footer Section
    Route::get('footer',[FooterController::class,'index'])->name('footer.list');
    Route::get('footer/create',[FooterController::class,'create'])->name('footer.create');
    Route::post('footer/store',[FooterController::class,'store'])->name('footer.store');
    Route::get('footer/edit/{id}',[FooterController::class,'edit'])->name('footer.edit');
    Route::post('footer/update/{id}',[FooterController::class,'update'])->name('footer.update');


    
    });
    Route::get('/lareb', function(){
    return Destinations123::all();
     })->name('destination.list');