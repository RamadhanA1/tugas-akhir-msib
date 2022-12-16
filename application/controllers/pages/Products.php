<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    public function index(){
        $this->load->model('M_products');
        $this->load->model('M_kategori');
        $data['products'] = $this->M_products->getProducts();
        $data['kategori'] = $this->M_kategori->get();
        // $this->load->view('index', $data );
        $this->load->view('pages/products', $data);
    }

    public function getWhereCategory($id){
        $this->load->model('M_products');
        $this->load->model('M_kategori');
        $data['products'] = $this->M_products->getProducts();
        $data['kategori'] = $this->M_kategori->get();
        // $this->load->view('index', $data );
        $this->load->view('pages/products', $data);
        // return $this->db->get_where('products', ['kategori_id' => $id])->result_array();
    }

}
?>