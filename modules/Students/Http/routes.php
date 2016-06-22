<?php

Route::group(['prefix' => 'dash/students', 'middleware' => 'auth'], function() {
	Route::get('/list', 'StudentController@getList')->name('students.list');
	Route::get('/new', 'StudentController@getNew')->name('students.new');
});
