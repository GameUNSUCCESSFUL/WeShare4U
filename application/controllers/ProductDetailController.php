<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productDetailController extends CI_Controller
{
    public function index()
    {
        $this->load->model('ProductModel');
        $id = $this->input->get('id');

        $row['product'] = $this->ProductModel->get_product($id);
        $type =  $row['product']['product_type'];
        $row['product_connect'] = $this->ProductModel->get_product_connect($type);
        $this->load->view("productdetail", $row);

    }

    public function receive()
    {
        $this->load->view("receive");
    }


}