<?php
/**
 * Created by PhpStorm.
 * User: fasty
 * Date: 21/12/14
 * Time: 2:46
 */

class Category_model extends MY_Model{
    public $_table = 'dm_category';
    public $primary_key = 'ct_id';

    public function __construct(){
        parent::__construct();
        $this->_database = $this->db;
    }
}