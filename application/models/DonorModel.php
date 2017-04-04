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

    public function add_product($product_name, $product_color, $product_number, $weight_number, $weight_type, $size_width, $size_long, $size_type, $product_detail,  $product_type, $user_id, $img_path)
    {
        $data = array(
            'product_name' => $product_name,
            'product_color' => $product_color,
            'product_number' => $product_number,
            'weight_number' => $weight_number,
            'weight_type' => $weight_type,
            'size_width' => $size_width,
            'size_long' => $size_long,
            'size_type' => $size_type,
            'product_type' => $product_type,
            'product_detail' => $product_detail,
            'user_id' => $user_id,
            'img_path' => $img_path
        );
        $this->db->insert('tb_donation_products', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function show_last_query($insert_id)
    {
        $last_query = $this->db->query('SELECT * FROM tb_donation_products WHERE product_id = '.$insert_id);
        return $last_query;
    }

    public function edit_product($product_id, $product_name, $product_color, $product_number, $weight_number, $weight_type, $size_width, $size_long, $size_type, $product_detail,  $product_type, $user_id, $img_path)
    {
        $data = array(
            'product_name' => $product_name,
            'product_color' => $product_color,
            'product_number' => $product_number,
            'weight_number' => $weight_number,
            'weight_type' => $weight_type,
            'size_width' => $size_width,
            'size_long' => $size_long,
            'size_type' => $size_type,
            'product_type' => $product_type,
            'product_detail' => $product_detail,
            'user_id' => $user_id,
            'img_path' => $img_path
        );
        $this->db->where('product_id', $product_id);
        $this->db->update('tb_donation_products', $data);
        $check = $this->db;
        return $check;
    }
}