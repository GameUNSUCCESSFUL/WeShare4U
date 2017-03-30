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
       // $this->load->library('pagination');

        //$config['base_url'] = base_url()."receiverView.php";
        //$config['total_rows'] = 200;
       // $config['per_page'] = 20;

       // $this->pagination->initialize($config);

        //echo $this->pagination->create_links();
        $sql = "SELECT * FROM tb_donation_products";
        $rs = $this->db->query($sql);

        $data['rs'] = $rs->result_array();

        $this->load->view("receiverView",$data);
    }
}
