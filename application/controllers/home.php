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
		$this->load->view($this->layout, $data);
	}
}