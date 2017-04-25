<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class BasketController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['result_basket'] = $this->session->basket;
        $this->load->view('basket',$data);
    }
    public function ajax_add_basket(){
        //$this->session->sess_destroy();
        $product_name = $this->input->post('product_name');
        $product_id = $this->input->post('product_id');
        $count = $this->input->post('count');
        $img = $this->input->post('img');
        $max = $this->input->post('max');
        $item = array(
            "name" => $product_name,
            "count" => $count,
            "product_id" => $product_id,
            "img" => $img,
            "max" => $max
        );
        if(isset($this->session->basket)){
            $basket = $this->session->basket;
            foreach ($basket as $key => $item_for){
                if($item_for['product_id'] == $product_id){
                    $basket[$key]['count'] = $count;
                    $this->session->basket = $basket;
                    $status = $key;
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
    public function remove_item(){
        $basket = $this->session->basket;
        $product_id = $this->input->post('product_id');
        foreach ($basket as $key => $item_delete ){
            if($item_delete['product_id'] == $product_id) {
                unset($basket[$key]);
                $delete = "delete";
                break;
            }else{
                $delete =  "fall";
            }
        }
        if($this->session->basket){
            $basket2 = $this->session->basket;
            $countrow =  count($basket2);
        }else{
            $countrow =  0;
        }
        $data = array(
            "massage1" => $delete,
            "massage2" => $countrow
        );
        echo json_encode($data);
        $this->session->basket = $basket;
    }
    public function update_item_basket(){
        $product_id = $this->input->post('product_id');
        $product_count = $this->input->post('product_count');
        $basket = $this->session->basket;
        foreach ($basket as $key => $item_update){
            if($item_update['product_id'] == $product_id) {
                $basket[$key]['count'] = $product_count;
                $this->session->basket = $basket;
                break;
            }
        }
    }
}