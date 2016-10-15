<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Uploader
    |--------------------------------------------------------------------------
    |
	| When uploading image Collejo will use the following pre-defined folders.
	| disk - name of the disk as defined in filesystems.php
	| path = subfolder path in the disk
	| permission - user permissions required to upload files
	| mime_types - valid mime types
	| max_size - allowed max file size
	| resize - image files will be automatically resized to the given width and height.
    |
    */

	'student_pictures' => [
		'disk' => 'local',
		'path' => '/student_pictures',
		'permissions' => ['edit_student'],
		'mime_types' => ['image/jpeg', 'image/png'],
		'max_size' => 1000,
		'resize' => [
			'small' => [200, 200],
			'medium' => [600, 600]
		]
	],
	'employee_pictures' => [
		'disk' => 'local',
		'path' => '/employee_pictures',
		'permissions' => ['edit_employee'],
		'mime_types' => ['image/jpeg', 'image/png'],
		'max_size' => 1000,
		'resize' => [
			'small' => [200, 200],
			'medium' => [600, 600]
		]
	],
	'employee_attachments' => [
		'disk' => 'local',
		'path' => '/employee_attachments',
		'permissions' => ['edit_employee'],
		'mime_types' => ['image/jpeg', 'image/png', 'application/pdf', 'application/msword'],
		'max_size' => 10000,
		'resize' => [
			'small' => [200, 200],
			'medium' => [600, 600]
		]
	],
];