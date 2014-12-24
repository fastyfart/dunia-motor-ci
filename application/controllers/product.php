<?php

/**
* 
*/

class Product extends Master
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model');
	}

	public function index(){
		$data['title'] = 'Produk';
		$data['content'] = 'product/index';

		$this->load->library('cart');
		if(isset($_POST['submit_cart'])){

			$cart = array(
				'id'      => $_POST['cart_code'],
				'qty'     => $_POST['cart_qty'],
				'price'   => $_POST['cart_price'],
				'name'    => $_POST['cart_name'],
				'options' => array('Color' => $_POST['cart_color'])
			);

			$this->cart->insert($cart);
		}

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

	public function cart(){
		$data['title'] = 'Produk';
		$data['content'] = 'product/cart';
		$data['brands'] = $this->brand_model->get_all();

		/* Flash data when users try to login */
			/*error*/
			if($this->session->flashdata('errors')){
				$data['error'] = $this->session->flashdata('errors');
			}else{
				$data['error'] = null;
			}

			if($this->session->flashdata('success')){
				$data['success'] = true;
			}else{
				$data['success'] = null;
			}

		/* end flash data login*/

		/* Flash data when user try to register*/
			if($this->session->flashdata('regErrors')){
				$data['regErrors'] = $this->session->flashdata('regErrors');
			}else{
				$data['regErrors'] = null;
			}

			if($this->session->flashdata('regSuccess')){
				$data['regSuccess'] = true;
			}else{
				$data['regSuccess'] = null;
			}
		/* end flas data register */

		$this->load->view($this->layout, $data);
	}
}