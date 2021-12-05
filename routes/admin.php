<?php

// Auth Routes
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function (){

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Auth::routes();
	// Route::get('/admin', 'HomeController@index')->name('admin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

     });/** End group**/



// Route::namespace('Admin')->group(function () {
//this route with auth

Route::group(
    [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'auth' ]
    ], function(){

     /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
     Route::resource('/company', App\Http\Controllers\Admin\CompanyController::class);
     Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
     Route::resource('/blogs', App\Http\Controllers\Admin\BlogsController::class);
     Route::resource('/whyus', App\Http\Controllers\Admin\WhyusController::class);
     Route::resource('/numbers', App\Http\Controllers\Admin\GolfNumberController::class);
     Route::resource('/clients', App\Http\Controllers\Admin\ClientController::class);
     Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class);
     Route::resource('/gallery', App\Http\Controllers\Admin\GalleryController::class);
     Route::resource('/messages', App\Http\Controllers\Admin\MessagesController::class);
     Route::resource('/gallery-category', App\Http\Controllers\Admin\GalleryCategoryController::class);
     Route::resource('/company-contact', App\Http\Controllers\Admin\CompanyContactController::class);


    }); /** End  **/





// });/** End  Route**/
