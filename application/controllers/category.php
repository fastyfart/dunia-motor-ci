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
		$this->load->model('category_model');

		if(isset($_GET['brand']) && isset($_GET['cat'])){
			$record = $this->brand_model->with('category')->get($_GET['brand']);
			$this->load->model('product_model');
			$products = $this->product_model->product_by_cat($_GET['brand'], $_GET['cat']);
		}elseif(isset($_GET['brand']) && !isset($_GET['cat'])){
			$record = $this->brand_model->with('category')->with('product')->get($_GET['brand']);
		}else{
			$record = null;
		}

		$data['brands'] = $this->brand_model->get_all();
		$data['categories'] = $record->category;
		$data['products'] = (isset($products)) ? $products : $record->product;

		$this->load->view($this->layout, $data);
	}
}