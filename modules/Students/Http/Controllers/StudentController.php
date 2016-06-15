<?php 

namespace Collejo\Modules\Students\Http\Controllers;

use Collejo\Http\Controllers\Controller as BaseController;

class StudentController extends BaseController
{

	public function getIndex()
	{
		return view('students::list')->render();
	}
}
