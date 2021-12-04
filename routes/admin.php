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
    //     //-------------------------User Screen
    //  //    Route::resource('/AdminUser', UserController::class);
    //    //-------------------------Client Screen
    //     Route::resource('/AdminClient', ClientController::class);
    //     //-------------------------Company Screen

    //     //-------------------------Contact Screen
    //     Route::resource('/AdminContact', Contact_messageController::class);
    //     //-------------------------Home Slider Screen
    //     Route::resource('/AdminHomeSlider', Home_sliderController::class);
    //      //-------------------------Home Slider Screen
    //      Route::resource('/AdminHomeVedio', Home_vedioController::class);
    //       //-------------------------Image Gallery Screen
    //       Route::resource('/AdminImageGallery', Image_galleryController::class);
    //       //-------------------------Vedio Gallery Screen
    //       Route::resource('/AdminVedioGallery', Vedio_galleryController::class);
    //       //-------------------------Feedback Screen
    //       Route::resource('/AdminFeedback', FeedbackController::class);
    //        //-------------------------Material Screen
    //        Route::resource('/AdminMaterial', MaterialController::class);
    //        //-------------------------Material Screen
    //        Route::resource('/AdminMaterial', MaterialController::class);
    //        //-------------------------NewsLetter Screen
    //        Route::resource('/AdminNewsLetter', News_letterController::class);
    //        //-------------------------Supplier Screen
    //        Route::resource('/AdminSupplier', SupplierController::class);
    //        //-------------------------Supplier Screen
    //        Route::resource('/AdminUpvcNumber', Upvc_numberController::class);
    //        //-------------------------Why Company Screen
    //        Route::resource('/AdminWhyCompany', Why_companyController::class);
    //        //-------------------------Blog Screen
    //        Route::resource('/AdminBlog', BlogController::class);
    //        //-------------------------BlogTag Screen
    //        Route::resource('/AdminBlogTag', Blogs_tagController::class);
    //        //-------------------------Product Screen
    //        Route::resource('/AdminProduct', ProductController::class);
    //        //-------------------------Product Category Screen
    //        Route::resource('/AdminProductCategory', Product_categoryController::class);
    //         //-------------------------Company Performance Screen
    //        Route::resource('/AdminCompanyPerformance', Company_performanceController::class);
    //         //-------------------------Company Product Images Screen
    //         Route::resource('/AdminProductImages', Product_imgController::class);
    //          //-------------------------Company Product Key Feature Screen
    //        Route::resource('/AdminProductKeyFeature', Product_key_featureController::class);

    }); /** End  **/





// });/** End  Route**/