<?php

Route::get('/', 'SiteController@index');
Route::get('/contato', 'SiteController@contato');
Route::get('/informativo', 'SiteController@informativo');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin', function () 
	{ 
		return view('admin_template'); 
	}); 
