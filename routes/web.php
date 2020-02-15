<?php




Route::get('dashboard', 'Admin\DashboardController@index');


Route::resource('dashboard/category', 'Admin\CategoryController');
Route::resource('dashboard/meal', 'Admin\MealController');
Route::resource('dashboard/food', 'Admin\FoodController');
Route::resource('dashboard/restaurant', 'Admin\RestaurantController');


Route::get('/', 'Web\HomeController@index');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');