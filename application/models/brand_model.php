<?php
/**
 * Created by PhpStorm.
 * User: fasty
 * Date: 21/12/14
 * Time: 2:21
 */

class Brand_model extends MY_Model{

    public $_table = 'dm_brand';
    public $primary_key = 'br_id';
    public $has_many = array('category' => array(
                                    'primary_key' => 'ct_brand',
                                    'model' => 'category_model'
                                ));

    public function __construct(){
        parent::__construct();
        $this->_database = $this->db;
    }
}