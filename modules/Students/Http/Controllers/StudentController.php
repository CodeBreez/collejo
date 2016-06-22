<?php 

namespace Collejo\Modules\Students\Http\Controllers;

use Collejo\App\Http\Controllers\Controller as BaseController;

class StudentController extends BaseController
{

	public function getList()
	{
		return view('students::list')->render();
	}

	public function getNew()
	{
		return view('students::new')->render();
	}
}
