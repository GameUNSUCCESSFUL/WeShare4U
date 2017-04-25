<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "weshared4ugroup4@gmail.com"; //email address
        $config['smtp_pass'] = "0839536380";  // password
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $this->email->initialize($config);


        $this->email->initialize($config);
    }

    public function index()
    {
        $this->load->view('adminaccept');
    }

    public function user_management()
    {
        $this->db->select('*');
        $this->db->from('tb_donation_users');
        $this->db->where('access_status LIKE 0');
        $data['row'] = $this->db->get()->result_array();
        $this->load->view('usermanagement', $data);
    }

    public function up_status_user()
    {
        $user_id = $this->input->post('user_id');
        $status = $this->input->post('status');
        $email = $this->input->post('email');

        if($status == 1){
            $text = "ยินดีต้อนรับเป็นสมาชิก คุณได้รับการอนุมัติ สามารถเข้าใช้บริการได้แล้วครับ";
        }else {
            $text = "ขอแสดงความเสียใจ คุณไม่ได้รับการอนุมัติเข้าใช้งาน";
        }
        $this->email->from('weshared4ugroup4@gmail.com', 'WeShare4U');
        $this->email->to($email);
        $this->email->subject('WeShare4U');
        $this->email->message($text);
        $this->email->send();
        $row = array(
            'access_status' => $status
        );
        $this->db->where('user_id', $user_id);
        $this->db->update('tb_donation_users', $row);
        echo "pass";
    }


}