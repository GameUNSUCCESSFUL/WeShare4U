<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Game
 * Date: 01-Apr-17
 * Time: 22:51
 * @property object load
 */
class DonateController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('donation/donor');
    }

    public function add()
    {
        $img_name = time() . rand();
        $config = array(
            'upload_path' => 'uploads/donateImages',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '20000',
            'max_width' => '20000',
            'max_height' => '20000',
            'file_name' => $img_name
        );
        $this->load->library('upload', $config);

        $product_name = $this->input->post("product_name");
        $product_color = $this->input->post("product_color");
        $product_number = $this->input->post("product_number");

        $weight_number = (string)$this->input->post("weight_number");
        $weight_type = $this->input->post("weight_type");

        $size_width = (string)$this->input->post("size_width");
        $size_long = (string)$this->input->post("size_long");
        $size_type = $this->input->post("size_type");

        $product_detail = $this->input->post("product_detail");
        $product_type = $this->input->post("product_type");
        $user_id = 1;

        if ($this->upload->do_upload('product_image')) {
            $img_path = $img_name . $this->upload->data('file_ext');
            $insert_id = $this->DonorModel->add_product($product_name, $product_color, $product_number, $weight_number, $weight_type, $size_width, $size_long, $size_type, $product_detail,  $product_type, $user_id, $img_path);
            log_message('debug',print_r("insert id : ".$insert_id,TRUE));
            $this->show_last_donate($insert_id);
        } else {
            echo $this->upload->display_errors();
        }
    }

    public function show_last_donate($insert_id)
    {
        $data['rs'] = $this->DonorModel->show_last_query($insert_id);
        $this->load->view('donation/show_product', $data);
    }

    /**
     * @return object
     */
    public function show_edit($insert_id)
    {
        $data['rs'] = $this->DonorModel->show_last_query($insert_id);
        $this->load->view('donation/donor_edit', $data);
    }

    /**
     * @return object
     */
    public function do_edit()
    {

        $img_name = time() . rand();
        $config = array(
            'upload_path' => 'uploads/donateImages',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '20000',
            'max_width' => '20000',
            'max_height' => '20000',
            'file_name' => $img_name
        );
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('product_name', 'product_name', 'required');
        $this->form_validation->set_rules('product_color', 'product_color', 'required');
        $this->form_validation->set_rules('product_number', 'product_number', 'required');
        $this->form_validation->set_rules('weight_number', 'weight_number', 'required');
        $this->form_validation->set_rules('weight_type', 'weight_type', 'required');
        $this->form_validation->set_rules('size_width', 'size_width', 'required');
        $this->form_validation->set_rules('size_long', 'size_long', 'required');
        $this->form_validation->set_rules('size_type', 'size_type', 'required');
        $this->form_validation->set_rules('product_detail', 'product_detail', 'required');
        $this->form_validation->set_rules('product_type', 'product_type', 'required');

        if($this->form_validation->run() === false){
            echo "error";
        }else{
            $product_id = $this->input->post("product_id");
            $product_name = $this->input->post("product_name");
            $product_color = $this->input->post("product_color");
            $product_number = $this->input->post("product_number");

            $weight_number = (string)$this->input->post("weight_number");
            $weight_type = $this->input->post("weight_type");

            $size_width = (string)$this->input->post("size_width");
            $size_long = (string)$this->input->post("size_long");
            $size_type = $this->input->post("size_type");

            $product_detail = $this->input->post("product_detail");
            $product_type = $this->input->post("product_type");
            $user_id = 1;

            if ($_FILES['product_image']['size'] == 0)
            {
                $img_path = $_SESSION['img_path'];

                $this->DonorModel->edit_product($product_id, $product_name, $product_color, $product_number, $weight_number, $weight_type, $size_width, $size_long, $size_type, $product_detail,  $product_type, $user_id, $img_path);

                $this->show_last_donate($product_id);
            }else{
                if ($this->upload->do_upload('product_image')) {
                    $img_path = $img_name . $this->upload->data('file_ext');
                    $this->DonorModel->edit_product($product_id, $product_name, $product_color, $product_number, $weight_number, $weight_type, $size_width, $size_long, $size_type, $product_detail,  $product_type, $user_id, $img_path);
                    $this->show_last_donate($product_id);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }

    }
}