<?php 
	
class Master extends CI_Controller{
	public $layout;

	public function __construct(){
		parent::__construct();
		$this->layout = 'layout/master';
	}
}
