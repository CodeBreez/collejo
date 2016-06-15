<?php

namespace Collejo\Modules\Students\Providers;

use Collejo\Core\Support\ModuleServiceProvider;

class StudentsModuleServiceProvider extends ModuleServiceProvider
{

    private $namespace = 'Collejo\Modules\Students\Http\Controllers';

    public function boot()
    {
        $this->loadViewsFrom([realpath(__DIR__ . '/../resources/views')], 'student');
        
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../resources/lang'), 'student');

    }

    public function map(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require_once realpath(__DIR__ . '/../Http/routes.php');
        });
    }

    public function register()
    {

    }
}
