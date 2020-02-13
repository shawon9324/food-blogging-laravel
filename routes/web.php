<?php




Route::get('/admin/dashboard', 'Admin\DashboardController@index');


Route::resource('admin/dashboard/category', 'Admin\CategoryController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
