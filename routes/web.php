<?php

/**
 * Blog Links
 */
Route::group([ 'prefix' => '/' ], function () {
	Route::get('/', [
		'as'	=> 'posts.index',
		'uses'	=> 'BlogController@index'
	]);
	
	Route::get('/{slug}', [
		'as'	=> 'posts.show',
		'uses'	=> 'BlogController@show'
	]);
});
