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
    }
}