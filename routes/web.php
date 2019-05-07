<?php


Auth::routes();

Route::get('/', 'UpskillController@index')->name('frontend.home');
Route::get('about', 'UpskillController@about')->name('frontend.about');
Route::get('course', 'UpskillController@course')->name('frontend.course');
Route::get('news', 'UpskillController@news')->name('frontend.news');
Route::get('contact', 'UpskillController@contact')->name('frontend.contact');
Route::get('register', 'UpskillController@register')->name('user.register');
Route::get('single-course', 'UpskillController@singlecourse')->name('frontend.sinlge-course');

