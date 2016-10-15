<?php

return [

	// authentication settings
	'auth' => [
		// living time of a re-authentication grant
		'reauth_ttl' => 3600
	],

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

	// app caching
	'caching' => [
		// cache each user's permissions
		'user_permissions' => 30,
		// cache repository search criteria results. relationship are not cached
		'search_criteria' => 30
	],

	// assets
	'assets' => [
		// load minified version of css and js
		'minified' => true,

		// load additional styles from
		'theme' => null
	],

];