<?php

return [

	// send emails on
	'emails' => [
		'new_user_password_create_request' => [
			'student' => true,
			'guardian' => true,
			'admin' => true,
			'employee' => true
		]
	],

	// global pagination configuration
	'pagination' => [
		'perpage' => 10
	],

	// assets
	'assets' => [
		'minified' => true
	],

	// app caching
	'caching' => [
		// cache each user's permissions
		'user_permissions' => 30,
		// cache repository search criteria results. relationship are not cached
		'search_criteria' => 30
	],

	'modules' => [
		// check module permissions in database on every request
		'check_permissions' => false
	]
];