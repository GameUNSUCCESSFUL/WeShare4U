<?php

/**
 * Created by PhpStorm.
 * User: Game
 * Date: 03-Apr-17
 * Time: 23:11
 */
class DonorModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_product($product_weight, $product_size, $product_name, $product_number, $product_color, $product_detail,$user_id, $img_path)
    {
        $data = array(
            'product_name' => $product_name,
            'product_weight' => $product_weight,
            'product_size' => $product_size,
            'product_number' => $product_number,
            'product_color' => $product_color,
            'product_detail' => $product_detail,
            'user_id' => $user_id,
            'img_path' => $img_path
        );
        return $this->db->insert('tb_donation_products', $data);
    }

    public function show_last_query()
    {
        $query = $this->db->last_query('tb_donation_products');
        return $query;
    }
}