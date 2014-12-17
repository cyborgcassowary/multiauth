<?php



Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);


Route::get('dashboard', ['as'=> 'dashboard', 'uses' => 'DashboardController@index']);