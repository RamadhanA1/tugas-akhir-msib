<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'core/Base_controller.php';
class Products extends CI_Controller{
    // public $data = array();

    public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'M_products'
		]);
	}
    
    public function index(){
        // $this->data['title'] = "akun";
		$this->data['products'] = $this->M_products->get();
        $this->data['products'] = $this->load->view('admin/products', $this->data, true);
        $this->load->view('admin/template/header');
        $this->load->view('admin/products');
        $this->load->view('admin/template/footer');
    }

    public function tambah(){
        $this->load->view('admin/template/header');
        $this->load->view('admin/products/tambah');
        $this->load->view('admin/template/footer');
    }

    public function upload() {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = 10000;
        $config['max_width'] = 2048;
        $config['max_height'] = 1080;
        
        $this->load->library('upload', $config);
        
        if (! $this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());
            

            echo 'upload gagal';

            // $this->load->view ('upload_form', $error);
        }
        
        else{
            $data = $this->upload->data();
            $kategori_id = $this->input->post();
            $input = $this->input->post();
            $status = $this->input->post();

            $hero['img'] = $data['file_name'];
            $hero['kategori_id'] = $kategori_id['kategori_id'];
            $hero['nama'] = $input['nama'];
            $hero['harga'] = $input['harga'];
            $hero['deskripsi'] = $input['deskripsi'];
            $hero['link'] = $input['link'];
            $hero['status'] = $status['status'];
            
            $this->db->insert('products', $hero);
            if ($this->db->affected_rows() > 0) {
                echo 'data berhasil disimpan';
            } else {
                echo 'data gagal disimpan';
            }
            
            // $data = array('upload_data' => $this->upload->data());
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // die;

            // $this->load->view ('upload-success', $data);
        }
    }
}
?>