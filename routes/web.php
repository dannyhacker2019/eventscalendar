<?php


Auth::routes();

Route::get('/', 'EventsController@index')->name('frontend.home');
Route::get('about/me', 'EventsController@aboutme')->name('frontend.about.me');
Route::get('about/lol', 'EventsController@lol')->name('frontend.lol');
Route::get('about', 'EventsController@about')->name('frontend.about');
Route::get('course', 'EventsController@course')->name('frontend.course');
Route::get('course-single', 'EventsController@course-single')->name('frontend.course-single');
Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@mail');
Route::get('blog-single', 'EventsController@blog-single')->name('frontend.blog-single');
Route::get('blog', 'EventsController@blog')->name('frontend.blog');
Route::get('events', 'EventsController@events')->name('frontend.events');


Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
