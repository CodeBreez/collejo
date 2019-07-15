<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where to load modules from
    |--------------------------------------------------------------------------
    |
    | Here you may specify which folders to load modules from
    | Paths are relative to base path
    |
    */

    'module_paths' => [
        'modules',
    ],

    /*
    |--------------------------------------------------------------------------
    | Supported Languages
    |--------------------------------------------------------------------------
    |
    | An array of supported languages
    |
    */

    'languages' => [
        'en',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | Configuration for pagination
    |
    */

    'pagination' => [
        'perpage' => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Themes
    |--------------------------------------------------------------------------
    |
    | Configuration for themes
    | Paths are relative to the base path
    |
    */
    'themes' => [
        'theme_paths' => [
            'themes',
        ],
        'active_theme' => null,

    ],

    /*
    |--------------------------------------------------------------------------
    | Tweaks
    |--------------------------------------------------------------------------
    |
    | These are tweaks to fine tune the performance of Collejo
    |
    */
    'tweaks' => [

        /*
         * Certain pages require the user to enter the password again.
         * This action could be remembered for the specific time.
         */
        'reauth_ttl' => env('REAUTH_TTL', 3600),
        /*
         * Collejo can check if module permissions are initialized
         * properly by checking the database during module init.
         * Setting this to false will load Collejo faster,
         * however permissions for newly installed modules must be
         * installed using the CLI or they will be ignored.
         */
        'check_module_permissions_on_module_init' => env('CHECK_MODULE_PERMISSION_ON_MODULE_INIT', true),

        /*
         * Every time a search query for a list of items is run in the database
         * Collejo caches the search results.
         */
        'criteria_cache_ttl' => env('COLLEJO_CRITERIA_CACHE_TTL', 0),

        /*
         * Collejo can cache permissions for each user, enabling this will
         * increase the performance by skipping the need to query the database on
         * each authorization check.
         */
        'user_permissions_cache_ttl' => env('COLLEJO_USER_PERMISSIONS_CACHE_TTL', 0),

        'fe_asset_cache_ttl' => env('COLLEJO_FE_ASSETS_CACHE_TTL', 0),
    ],

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

    'file_uploader' => [

        'buckets' => [
            'student_pictures' => [
                'disk'        => 'local',
                'path'        => '/student_pictures',
                'permissions' => ['edit_student'],
                'mime_types'  => ['image/jpeg', 'image/png'],
                'max_size'    => 1000000,
                'resize'      => [
                    'small'  => [200, 200],
                    'medium' => [600, 600],
                ],
            ],
            'employee_pictures' => [
                'disk'        => 'local',
                'path'        => '/employee_pictures',
                'permissions' => ['edit_employee'],
                'mime_types'  => ['image/jpeg', 'image/png'],
                'max_size'    => 1000000,
                'resize'      => [
                    'small'  => [200, 200],
                    'medium' => [600, 600],
                ],
            ],
            'employee_attachments' => [
                'disk'        => 'local',
                'path'        => '/employee_attachments',
                'permissions' => ['edit_employee'],
                'mime_types'  => ['image/jpeg', 'image/png', 'application/pdf'],
                'max_size'    => 1000000,
                'resize'      => [
                    'small'  => [200, 200],
                    'medium' => [600, 600],
                ],
            ],
        ],
    ],
];
