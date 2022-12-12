<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    public function index(){
        $this->load->model('M_products');
        $data['products'] = $this->M_products->getProducts();
        // $this->load->view('index', $data );
        $this->load->view('pages/products', $data);
    }
}
?>