<?php
define('BASEPATH')OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Game
 * Date: 30-Mar-17
 * Time: 00:26
 */
class UsersController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function login()
    {
        $this->load->view('login');
    }

}