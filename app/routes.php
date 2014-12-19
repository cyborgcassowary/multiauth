<?php



//Route::get('/', ['as' => 'home', 'uses' => 'SessionsController@index']);

//Route::get('create', ['as' => 'create', 'uses' => 'SessionsController@create']);
Route::get('/', 'SessionsController@index');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::get('admin', function()
{
   return 'Admin Page';
})->before('auth');

//Route::get('/', ['as' => 'home', 'uses' => 'SessionsController@index']);


//Route::get('sessions', ['as' => 'create', 'uses' => 'SessionsController@create']);


//Route::get('dashboard', ['as'=> 'dashboard', 'uses' => 'DashboardController@index']);


//Route::group(array('before' => 'auth'), function()
//{
//
//});