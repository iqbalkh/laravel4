<?php

class Authors_Controller extends Controller {
	
	public $restful = true;
	
	function get_index(){
		return View::make('authors.index');
		
	}
}