<?php

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
//Home page
Route::get('/', 'SiteController@home')->name('home');
//Rooms page
Route::get('/rooms', 'SiteController@rooms')->name('rooms');
//About page
Route::get('/about', 'SiteController@about')->name('about');
//News page
Route::get('/news', 'SiteController@news')->name('news');
Route::get('/news-more/{id}', 'SiteController@newsMore')->name('news-more');
//Contact page
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@feedbackStore')->name('contact.store');
Route::get('/search', 'SiteController@search')->name('search');
//Admin routes
Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('admin')->group(function() {
    Route::resource('posts', 'PostsController');
    Route::get('feedbacks', 'FeedbacksController@index')->name('feedbacks.index');
    Route::get('feedbacks/{id}/show', 'FeedbacksController@show')->name('feedbacks.show');
    Route::delete('feedbacks/{id}/delete', 'FeedbacksController@delete')->name('feedbacks.delete');
});
Auth::routes([
    'register' => false
]);

// Route::get('/home', 'HomeController@index')->name('home');
