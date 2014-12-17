<?php



Route::get('/', function()
{
	return User::all();
});
