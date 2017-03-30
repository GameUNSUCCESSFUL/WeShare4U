<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    public function register()
    {

        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_donation_users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('identity_card', 'Identity_card', 'trim|required');
        $this->form_validation->set_rules('district', 'District', 'trim|required');
        $this->form_validation->set_rules('province', 'Province', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'Zip_code', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');


        if ($this->form_validation->run() === false) {

            // validation not ok, send validation errors to the view
            $this->load->view('user/register/register', $data);

        } else {

            // set variables from the form
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $identity_card = $this->input->post('identity_card');
            $district = $this->input->post('district');
            $province = $this->input->post('province');
            $zip_code = $this->input->post('zip_code');
            $address = $this->input->post('address');
            $phone = $this->input->post('phone');

            if ($this->UserModel->create_user($email, $password, $firstname, $lastname, $identity_card, $district, $province, $zip_code, $address, $phone)) {

                // user creation ok
                $this->load->view('user/register/register_success', $data);

            } else {

                // user creation failed, this should never happen
                $data->error = 'There was a problem creating your new account. Please try again.';

                // send error to the view
                $this->load->view('user/register/register', $data);

            }

        }

    }

    /**
     * login function.
     *
     * @access public
     * @return void
     */
    public function login()
    {
        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        if ($this->form_validation->run() == false) {
            echo "error";
        } else {
            // set variables from the form
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->user_model->resolve_user_login($email, $password)) {

                $user_id = $this->user_model->get_user_id_from_username($username);
                $user = $this->user_model->get_user($user_id);

                // set session user datas
                $_SESSION['user_id'] = (int)$user->id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['logged_in'] = (bool)true;
                $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
                $_SESSION['is_admin'] = (bool)$user->is_admin;

                // user login ok
                $this->load->view('header');
                $this->load->view('user/login/login_success', $data);
                $this->load->view('footer');

            } else {

                // login failed
                $data->error = 'Wrong username or password.';

                // send error to the view
                $this->load->view('header');
                $this->load->view('user/login/login', $data);
                $this->load->view('footer');

            }

        }

    }

    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout()
    {

        // create the data object
        $data = new stdClass();

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // user logout ok
            $this->load->view('header');
            $this->load->view('user/logout/logout_success', $data);
            $this->load->view('footer');

        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');

        }

    }


}