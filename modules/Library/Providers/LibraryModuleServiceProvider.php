<?php

namespace Collejo\Modules\Library\Providers;

use Collejo\Core\Providers\Module\ModuleServiceProvider as BaseModuleServiceProvider;

class LibraryModuleServiceProvider extends BaseModuleServiceProvider
{

    protected $namespace = 'Collejo\Modules\Library\Http\Controllers';

    protected $name = 'library';

    /*protected $permissions = [
        'add_book' => 'Add Books'
    ];*/

    public function boot()
    {
        $this->initModule();
    }

    public function register()
    {

    }
}
