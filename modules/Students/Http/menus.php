<?php

Menu::group('Students', 'fa-users', function($parent){

	Menu::create('students.list', 'List')->setParent($parent);
	Menu::create('students.new', 'Create New')->setParent($parent);
	
});
