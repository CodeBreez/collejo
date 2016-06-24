<?php 

namespace Collejo\Modules\Library\Http\Controllers;

use Collejo\App\Http\Controllers\Controller as BaseController;

class LibraryController extends BaseController
{

	public function getList()
	{
		return view('library::list')->render();
	}

	public function getNew()
	{
		return view('library::new')->render();
	}
}
