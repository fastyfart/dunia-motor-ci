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

		$this->load->library('cart');
		if(isset($_POST['submit_cart'])){
			print_r($_POST);

			$cart = array(
				'id'      => $_POST['cart_code'],
				'qty'     => $_POST['cart_qty'],
				'price'   => $_POST['cart_price'],
				'name'    => $_POST['cart_name'],
				'options' => array('Color' => $_POST['cart_color'])
			);

			$this->cart->insert($cart);
		}

		$this->load->model('brand_model');
		$data['brands'] = $this->brand_model->get_all();

		if(isset($_GET['brand'])){
			$data['categories'] = $this->brand_model->with('category')->get($_GET['brand'])->category;
		}else{
			$this->load->model('category_model');
			$data['categories'] = $this->category_model->get_all();
		}

		$this->load->model('product_model');
		$data['product'] = $this->product_model->get($_GET['pr']);

		$this->load->view($this->layout, $data);
	}

	public function addToCart(){

	}
}