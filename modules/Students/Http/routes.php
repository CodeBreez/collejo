<?php

Route::group(['prefix' => 'dash/students'], function() {
	Route::get('/', 'StudentController@getIndex')->name('students');
});
