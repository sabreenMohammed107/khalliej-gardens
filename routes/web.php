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



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
        // Route::get('/', function () {
        //     return view('web.home');
        //     // return Redirect::to(Config::get('app.default_language'));
        // });
        Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
           //about us
	Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
        //contact us
	Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
    Route::post('/contact-message', [App\Http\Controllers\IndexController::class,'sendMessage']);
      //service
	Route::get('/web-service', [App\Http\Controllers\IndexController::class, 'service'])->name('service');
    Route::get('/single-service/{id}', [App\Http\Controllers\IndexController::class,'singleService']);
     //client
	Route::get('/web-client', [App\Http\Controllers\IndexController::class, 'client'])->name('client');
       //gallery
	Route::get('/web-gallery', [App\Http\Controllers\IndexController::class, 'gallery'])->name('gallery');
     //blogs
	Route::get('/web-blogs', [App\Http\Controllers\IndexController::class, 'blogs'])->name('blogs');
    Route::get('/single-blog/{id}', [App\Http\Controllers\IndexController::class,'singleBlog']);
    Route::post('/send-Comment', [App\Http\Controllers\IndexController::class,'sendComment']);
    });

