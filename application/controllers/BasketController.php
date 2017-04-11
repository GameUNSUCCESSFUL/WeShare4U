<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class BasketController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

    }
    public function ajax_add_basket(){
        //$this->session->sess_destroy();
        $product_name = $this->input->post('product_name');
        $product_id = $this->input->post('product_id');
        $count = $this->input->post('count');
        $item = array(
            "name" => $product_name,
            "count" => $count,
            "product_id" => $product_id
        );
        if(isset($this->session->basket)){
            $basket = $this->session->basket;
            for ($i = 0 ;$i<count($basket);$i++){
                if($basket[$i]['product_id'] == $product_id){
                    $basket[$i]['count'] = $count;
                    $this->session->basket = $basket;
                    $status = $i;
                    break;
                }
            }
        }
        if(!isset($status)){
            if(isset($this->session->basket)){
                $basket = $this->session->basket;
                array_push($basket,$item);
                $this->session->basket = $basket;
                $message = "success";
            }else{
                $basket = array();
                array_push($basket,$item);
                $this->session->basket = $basket;
                $message = "success";
            }
        }else{
            $message =  "fall";
        }
        if($this->session->basket){
            $basket = $this->session->basket;

            $countrow =  count($basket);
        }else{

            $countrow =  0;
        }
        $data = array(
            "message1" => $message,
            "message2" => $countrow
        );
        echo json_encode($data);

    }
    public function get_count_basket(){
        if($this->session->basket){
            $basket = $this->session->basket;
            echo count($basket);
        }else{
            echo 0;
        }
    }
    public function get_basket(){
        $basket = $this->session->basket;
        echo "<tr><th class='col-lg-10'>ชื่อสินค้า</th><th class='col-lg-2'>จำนวน</th></tr>";
        foreach ($basket as $bas){
            echo "<tr><td>".$bas['name']."</td> <td>".$bas['count']."</td></tr>";
        }
    }
}