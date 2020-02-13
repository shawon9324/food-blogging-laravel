<?php




Route::get('dashboard', 'Admin\DashboardController@index');


Route::resource('dashboard/category', 'Admin\CategoryController');
Route::resource('dashboard/food', 'Admin\FoodController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
