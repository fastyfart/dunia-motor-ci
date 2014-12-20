<?php

/**
* 
*/

class Product extends Master
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Produk';
		$data['content'] = 'product/index';
		$this->load->view($this->layout, $data);
	}

	public function addToCart(){

	}
}