<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Game
 * Date: 01-Apr-17
 * Time: 22:51
 * @property object load
 */
class DonateController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('donation/donor');
    }

    public function add()
    {
        $img_name = time() . rand();
        $config = array(
            'upload_path' => 'uploads/donateImages',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '20000',
            'max_width' => '20000',
            'max_height' => '20000',
            'file_name' => $img_name
        );
        $this->load->library('upload', $config);

        $width = (string)$this->input->post("width");
        $long = (string)$this->input->post("long");
        $unit_size = $this->input->post("unit_size");
        $product_weight = $width . "x" . $long . " " . $unit_size;

        $weight = (string)$this->input->post("weight");
        $unit_weight = $this->input->post("unit_weight");
        $product_size = $weight . " " . $unit_weight;

        $product_name = $this->input->post("product_name");
        $product_number = $this->input->post("product_number");
        $product_color = $this->input->post("product_color");
        $product_detail = $this->input->post("product_detail");
        $user_id = 1;
        if ($this->upload->do_upload('product_image')) {
            $img_path = $img_name . $this->upload->data('file_ext');
            $this->DonorModel->add_product($product_weight, $product_size, $product_name, $product_number, $product_color, $product_detail,$user_id, $img_path);

            $this->load->view("donation/show_product");
        } else {
            echo $this->upload->display_errors();
        }
    }

    public function show_last_donate()
    {
        $result = $this->DonorModel->show_last_query();
        $data['result'] = $result->result_array();
        $this->load->view('donation/show_product', $data);
    }


}