<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

/**
 * Created by PhpStorm.
 * User: Game
 * Date: 30-Mar-17
 * Time: 00:26
 */
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }

    public function index()
    {
        echo "user controller";
    }

    /**
     * register function.
     *
     * @access public
     * @return void
     */



}