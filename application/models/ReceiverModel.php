<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JuJiiz
 * Date: 30/3/2560
 * Time: 23:05
 */
class ReceiverModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function search_item($searchitem){
        $this->db->select('product_name')->from('tb_donation_products')->like('product_name', $searchitem)->get()->result_array();
    }
}