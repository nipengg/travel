<?php
Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');
// Route::get('/checkout', 'CheckoutController@index')->name('checkout');
// Route::get('/checkout/success', 'CheckoutController@success')->name('success');

Route::post('/checkout/{id}','CheckoutController@process')->name('checkout_process')->middleware(['auth', 'verified']);
Route::get('/checkout/{id}','CheckoutController@index')->name('checkout')->middleware(['auth', 'verified']);
Route::post('/checkout/create/{detail_id}','CheckoutController@create')->name('checkout-create')->middleware(['auth', 'verified']);
Route::post('/checkout/remove/{detail_id}','CheckoutController@remove')->name('checkout-remove')->middleware(['auth', 'verified']);
Route::get('/checkout/confirm/{id}','CheckoutController@success')->name('checkout-success')->middleware(['auth', 'verified']);

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware(['auth', 'admin'])
        ->group(function(){
            Route::get('/', 'DashboardController@index')->name('dashboard');

            Route::resource('travel-package', 'TravelPackageController');
            Route::resource('gallery', 'GalleryController');
            Route::resource('transaction', 'TransactionController');
        });

Auth::routes(['verify' => true]);