<?php

namespace Collejo\Modules\Students\Providers;

use Collejo\Core\Providers\Module\ModuleServiceProvider as BaseModuleServiceProvider;

class StudentsModuleServiceProvider extends BaseModuleServiceProvider
{

    protected $namespace = 'Collejo\Modules\Students\Http\Controllers';

    protected $name = 'student';

    protected $permissions = [
        'create_student' => 'Create students',
        'edit_student' => 'Edit students',
        'delete_student' => 'Delete students',
        'undelete_student' => 'Undelete students',
        'view_student' => 'View students'
    ];

    public function boot()
    {
        $this->initModule();
    }

    public function register()
    {

    }
}
