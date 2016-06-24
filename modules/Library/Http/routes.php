<?php

Route::group(['prefix' => 'dash/library', 'middleware' => 'auth'], function() {
	Route::get('/list', 'LibraryController@getList')->name('library.list');
	Route::get('/new', 'LibraryController@getNew')->name('library.new');
});
