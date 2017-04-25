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

        $page = $this->input->get('page');
        if($page == 1 || $page <1 || $page == null){
            $page = 1;
            $resultpage = 0;
        }else{
            $resultpage = ($page-1)*8;
        }
        $query = $this->db->query('SELECT * FROM tb_donation_products ORDER BY timestamp DESC LIMIT '.$resultpage.',8');
        $queryall = $this->db->query('SELECT * FROM tb_donation_products ORDER BY timestamp DESC ');

        if(empty($query->result_array())){
            $data['dbquery'] = 'Not Found';
        }else{
            $countall = $queryall->result_array();
            $data['dbquery'] = $query->result_array();
        }

        $data['count'] = ceil(count($countall)/8.0);
        $data['page'] = $page;
        $this->load->view('receiverView', $data);
        /*$config['base_url'] = base_url() . "index.php/ReceiverController/index";
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['total_rows'] = $this->db->count_all("tb_donation_products");

        $config['full_tag_open'] = "<div class='pagination'>";
        $config['full_tag_close'] = "</div>";

        $this->pagination->initialize($config);

        //$data['dbcon'] = $this->db->select('*')->from('tb_donation_products')->limit($config['per_page'],
        //$this->uri->segment(3))->get()->result_array();
        $data['dbcon'] = $this->db->query('SELECT * FROM tb_donation_products ORDER BY timestamp DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
        //$data['dbcon'] = $query->result_array();
        $data['links'] = $this->pagination->create_links();

        $this->load->view('receiverView', $data);*/
    }

    public function search_item(){
        $searchitem = $this->input->get('keyword');
        $searchselect = $this->input->get('searchselect');
        $page = $this->input->get('page');
        if($page == 1 || $page <1 || $page == null){
            $resultpage = 0;
        }else{
            $resultpage = ($page-1)*8;
        }

        if(isset($searchitem) && !empty($searchitem)){

            if($searchselect == 'selectname'){
                $query = $this->db->query('SELECT * FROM tb_donation_products WHERE product_name LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC LIMIT '.$resultpage.',8');
                $queryall = $this->db->query('SELECT * FROM tb_donation_products WHERE product_name LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC');
            }else if($searchselect == 'selecttype'){
                $query = $this->db->query('SELECT * FROM tb_donation_products WHERE product_type LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC LIMIT '.$resultpage.',8');
                $queryall = $this->db->query('SELECT * FROM tb_donation_products WHERE product_type LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC');
            }else{
                $query = $this->db->query('SELECT * FROM tb_donation_products WHERE product_name LIKE "%'.$searchitem.'%" OR product_type LIKE "%'.$searchitem.'%" OR product_detail LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC LIMIT '.$resultpage.',8');
                $queryall = $this->db->query('SELECT * FROM tb_donation_products WHERE product_name LIKE "%'.$searchitem.'%" OR product_type LIKE "%'.$searchitem.'%" OR product_detail LIKE "%'.$searchitem.'%" ORDER BY timestamp DESC');
            }

            $data['dbquery'] = $query->result_array();
            $countall = $queryall->result_array();
            $data['count'] = ceil(count($countall)/8.0);
            $data['page'] = $page;

            $data['searchitem'] = $searchitem;
            $data['searchselect'] =$searchselect;
            $data['links'] = '';


            $this->load->view('receiverView', $data);
        }else{
            redirect('ReceiverController');
        }
    }


}
