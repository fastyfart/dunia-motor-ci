<?php

/**
* 
*/
class Category extends Master
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Category';
		$data['content'] = 'category/index';

		$this->load->view($this->layout, $data);
	}
}