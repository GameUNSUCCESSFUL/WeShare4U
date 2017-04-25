<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
    public function select()
    {
        $this->load->view('userselect');
    }
    public function empty_page()
    {
        $this->load->view('emptypage');
    }
}
