<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productDetailController extends CI_Controller
{
    public function index()
    {
        $this->load->model('ProductModel');
        $id = $this->input->get('id');

        $row = $this->ProductModel->get_product($id);
        $this->load->view("productdetail", $row);

    }


}