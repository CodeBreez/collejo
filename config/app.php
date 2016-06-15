<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Collejo\Core\Providers\Auth\AuthServiceProvider::class,
        Collejo\Core\Providers\Broadcasting\BroadcastServiceProvider::class,
        Collejo\Core\Providers\Bus\BusServiceProvider::class,
        Collejo\Core\Providers\Cache\CacheServiceProvider::class,
        Collejo\Core\Providers\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Collejo\Core\Providers\Cookie\CookieServiceProvider::class,
        Collejo\Core\Providers\Database\DatabaseServiceProvider::class,
        Collejo\Core\Providers\Encryption\EncryptionServiceProvider::class,
        Collejo\Core\Providers\Filesystem\FilesystemServiceProvider::class,
        Collejo\Core\Providers\Foundation\Providers\FoundationServiceProvider::class,
        Collejo\Core\Providers\Hashing\HashServiceProvider::class,
        Collejo\Core\Providers\Mail\MailServiceProvider::class,
        Collejo\Core\Providers\Pagination\PaginationServiceProvider::class,
        Collejo\Core\Providers\Pipeline\PipelineServiceProvider::class,
        Collejo\Core\Providers\Queue\QueueServiceProvider::class,
        Collejo\Core\Providers\Redis\RedisServiceProvider::class,
        Collejo\Core\Providers\Auth\Passwords\PasswordResetServiceProvider::class,
        Collejo\Core\Providers\Session\SessionServiceProvider::class,
        Collejo\Core\Providers\Translation\TranslationServiceProvider::class,
        Collejo\Core\Providers\Validation\ValidationServiceProvider::class,
        Collejo\Core\Providers\View\ViewServiceProvider::class,
        Collejo\Core\Providers\Repository\RepositoryServiceProvider::class,

        /*
         * Collejo Service Providers...
         */
        Collejo\App\Providers\AppServiceProvider::class,
        Collejo\App\Providers\SetupServiceProvider::class,
        Collejo\App\Providers\AuthServiceProvider::class,
        Collejo\App\Providers\EventServiceProvider::class,
        Collejo\App\Providers\RouteServiceProvider::class,
        Collejo\App\Providers\ModuleServiceProvider::class,
        Collejo\App\Providers\ThemeServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Collejo\Core\Support\Facades\App::class,
        'Artisan' => Collejo\Core\Support\Facades\Artisan::class,
        'Auth' => Collejo\Core\Support\Facades\Auth::class,
        'Blade' => Collejo\Core\Support\Facades\Blade::class,
        'Cache' => Collejo\Core\Support\Facades\Cache::class,
        'Config' => Collejo\Core\Support\Facades\Config::class,
        'Cookie' => Collejo\Core\Support\Facades\Cookie::class,
        'Crypt' => Collejo\Core\Support\Facades\Crypt::class,
        'DB' => Collejo\Core\Support\Facades\DB::class,
        'Eloquent' => Collejo\Core\Database\Eloquent\Model::class,
        'Event' => Collejo\Core\Support\Facades\Event::class,
        'File' => Collejo\Core\Support\Facades\File::class,
        'Gate' => Collejo\Core\Support\Facades\Gate::class,
        'Hash' => Collejo\Core\Support\Facades\Hash::class,
        'Lang' => Collejo\Core\Support\Facades\Lang::class,
        'Log' => Collejo\Core\Support\Facades\Log::class,
        'Mail' => Collejo\Core\Support\Facades\Mail::class,
        'Password' => Collejo\Core\Support\Facades\Password::class,
        'Queue' => Collejo\Core\Support\Facades\Queue::class,
        'Redirect' => Collejo\Core\Support\Facades\Redirect::class,
        'Redis' => Collejo\Core\Support\Facades\Redis::class,
        'Request' => Collejo\Core\Support\Facades\Request::class,
        'Response' => Collejo\Core\Support\Facades\Response::class,
        'Route' => Collejo\Core\Support\Facades\Route::class,
        'Schema' => Collejo\Core\Support\Facades\Schema::class,
        'Session' => Collejo\Core\Support\Facades\Session::class,
        'Storage' => Collejo\Core\Support\Facades\Storage::class,
        'URL' => Collejo\Core\Support\Facades\URL::class,
        'Validator' => Collejo\Core\Support\Facades\Validator::class,
        'View' => Collejo\Core\Support\Facades\View::class,

        'Theme' => Collejo\Core\Support\Facades\Theme::class,
        'Menu' => Collejo\Core\Support\Facades\Menu::class,
        'Asset' => Collejo\Core\Foundation\Theme\Asset::class,

        'Uuid' => Webpatser\Uuid\Uuid::class
    ],

];
