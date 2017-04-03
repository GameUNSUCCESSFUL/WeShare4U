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
        $config['base_url'] = base_url() . "index.php/ReceiverController/index";
        $config['per_page'] = 12;
        $config['total_rows'] = $this->db->count_all("tb_donation_products");

        $config['full_tag_open'] = "<div class='pagination'>";
        $config['full_tag_close'] = "</div>";

        $this->pagination->initialize($config);

        $data['dbcon'] = $this->db->select('product_name')->from('tb_donation_products')->limit($config['per_page'], $this->uri->segment(3))->get()->result_array();
        $data['links'] = $this->pagination->create_links();

        $this->load->view('receiverView', $data);
    }

    public function search_item(){
        $searchitem = $this->input->post('keyword');
        //$this->input->post('searchselect');

        if(isset($searchitem) && !empty($searchitem)){
            $data['dbcon'] = $this->db->select('product_name')->from('tb_donation_products')->like('product_name', $searchitem)->get()->result_array();
            $this->load->view('receiverView', $data);
        }else{
            redirect('ReceiverController');
        }
    }
}
