<?php 

/**
* 
*/
class Home extends Master
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Home';
		$data['content'] = 'home/index';

		$this->load->model('brand_model');
		$data['brands'] = $this->brand_model->get_all();

		$this->load->model('category_model');
		$data['categories '] = $this->category_model->get_all();

		$this->load->view($this->layout, $data);
	}
}