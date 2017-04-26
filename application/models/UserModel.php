<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Game
 * Date: 30-Mar-17
 * Time: 01:12
 */
class UserModel extends CI_Model
{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function create_user($email, $password, $firstname, $lastname, $identity_card ,$address, $phone, $question, $answer, $img_path)
    {
        $passwordmd5 = md5($password);
        $data = array(
            'email' => $email,
            'password' => $passwordmd5,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'identity_card' => $identity_card,
            'address' => $address,
            'phone' => $phone,
            'question' => $question,
            'answer' => $answer,
            'user_type' => 'user',
            'access_status' => 0,
            'img_path' => $img_path
        );
        return $this->db->insert('tb_donation_users', $data);
    }


    public function do_login($email, $password)
    {
        $passwordmd5 = md5($password);
        $sql = "SELECT * FROM tb_donation_users WHERE email LIKE '" . $email . "' && password LIKE '" . $passwordmd5 . "'";
        $query = $this->db->query($sql)->result();
        if ($query) {
            $_SESSION["email"] = $query[0]->email;
            $_SESSION["firstname"] = $query[0]->firstname;
            $_SESSION["lastname"] = $query[0]->lastname;
            $_SESSION["user_type"] = $query[0]->user_type;
            $_SESSION['logged_in'] = true;

            if($query[0]->access_status == 1){
                if($_SESSION['user_type']=='admin'){
                    return "admin";
                }else{
                    return "success";
                }
            }else{
                $_SESSION["email"] = null;
                $_SESSION["firstname"] = null;
                $_SESSION["lastname"] = null;
                $_SESSION["user_type"] = null;
                $_SESSION['logged_in'] = false;
                return "not_access";
            }

        } else {
            return "error";
        }
//        $this->db->select('password');
//        $this->db->from('tb_donation_users');
//        $this->db->where('email', $email);
//        $hash = $this->db->get()->row('password');
////        if($hash != $password){
////            return false;
////        }else{
////            return true;
////        }
//        $check = $this->verify_password_hash($password, $hash);
//        return $check;
    }

    /**
     * get_user_id_from_username function.
     *
     * @access public
     * @param mixed $username
     * @return int the user id
     */
    public function get_user_id_from_email($email)
    {
        $this->db->select('user_id');
        $this->db->from('tb_donation_users');
        $this->db->where('email', $email);
        return $this->db->get()->row('user_id');
    }

    /**
     * get_user function.
     *
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id)
    {
        $this->db->from('tb_donation_users');
        $this->db->where('user_id', $user_id);
        return $this->db->get()->row();
    }

    /**
     * hash_password function.
     *
     * @access private
     * @param mixed $password
     * @return string|bool could be a string on success, or bool false on failure
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * verify_password_hash function.
     *
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash)
    {
        return password_verify($password, $hash);
    }

}