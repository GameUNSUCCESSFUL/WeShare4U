<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: AdminA
 * Date: 4/4/2560
 * Time: 1:30
 */
class ProductModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_product($id){
        $this->db->select('*');
        $this->db->from('tb_donation_products');
        $this->db->where('product_id',$id);
        return $this->db->get()->row();

        /*
        $query = $this->db->query('SELECT * FROM tb_donation_products WHERE product_id = '.$id);
        $rows = $query->custom_result_object('Product');
        return $rows->product_name;*/
    }
}
class Product{
    public $product_id;
    public $product_name;
    public $product_color;
    public $product_number;
    public $product_detail;
    public $product_size;
    public $product_weight;
    public $timestamp;
    public $user_id;
}