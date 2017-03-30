<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: JuJiiz
 * Date: 29/3/2560
 * Time: 22:10
 */
class ReceiverController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $config['base_url'] = base_url()."index.php/ReceiverController/";
        $config['per_page'] = 8;
        $config['total_rows'] = $this->db->count_all("tb_donation_products");

        $config['full_tag_open'] = "<div class = 'pagination'>";
        $config['full_tag_close'] = "</div>";

        $this->pagination->initialize($config);

        $data['dbcon'] = $this->db->select("product_name")->from("tb_donation_products")->limit($config['per_page'], $this->uri->segment(3))->get()->result_array();

        $this->load->view("receiverView",$data);
    }
}
