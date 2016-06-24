<?php

Menu::group('library', 'fa-book', function($parent){

	Menu::create('library.list', 'List')->setParent($parent);
	Menu::create('library.new', 'Create New')->setParent($parent);
	
})->setOrder(10);
