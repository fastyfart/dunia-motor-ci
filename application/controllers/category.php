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

		$this->load->model('brand_model');
		$data['brands'] = $this->brand_model->get_all();
		$data['categories'] = $this->brand_model->with('category')->get('APS')->category;

		$this->load->view($this->layout, $data);
	}
}