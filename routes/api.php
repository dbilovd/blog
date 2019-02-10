<?php

use Illuminate\Http\Request;

Route::group([ "prefix" => "/" ], function () {
	Route::get("/", [
		'as'	=> 'api.blogs.index',
		'uses'	=> 'BlogsAPIController@index'
	]);
});
