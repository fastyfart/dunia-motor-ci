<?php

/**
 * Created by PhpStorm.
 * User: fasty
 * Date: 21/12/14
 * Time: 22:23
 */
class Product_model extends MY_Model
{
    public $_table = 'dm_product';
    public $primary_key = 'pr_id';
    public $belongs_to = array(
        'category' => array(
            'primary_key' => 'pr_id',
            'model' => 'category_model'
        ),
        'brand' => array(
            'primary_key' => 'pr_id',
            'model' => 'brand_category'
        )
    );

    public function __construct()
    {
        parent::__construct();
        $this->_database = $this->db;
    }

    public function product_by_cat($idBrand, $idCat){

        if($idBrand == ''){
            $result = $this->db->select('*')
                ->from('dm_product')
                ->join("dm_category", "dm_category.ct_id = dm_product.pr_category")
                ->where('dm_product.pr_category', $idCat)
                ->get();
        }else{
            $result = $this->db->select('*')
                ->from('dm_product')
                ->join('dm_brand', 'dm_brand.br_id = dm_product.pr_brand')
                ->join("dm_category", "dm_category.ct_id = dm_product.pr_category")
                ->where('dm_product.pr_category', $idCat)
                ->where('dm_product.pr_brand', $idBrand)
                ->get();
        }



        return $result->result();
    }
}
