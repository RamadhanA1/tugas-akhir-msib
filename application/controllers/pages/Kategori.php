<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'M_products'
        ]);
    }
    public function index(){
        $this->load->model('M_products');
        $this->load->model('M_kategori');
        $data['products'] = $this->M_products->getProducts();
        $data['kategori'] = $this->M_kategori->get();
        // $this->load->view('index', $data );
        $this->load->view('pages/kategori', $data);
    }

    // public function getWhereCategory($kategori_id)
    // {
    //     $data['products'] = $this->M_products->getWhereCategory($kategori_id);
    //     $data['products'] = $this->M_heroUnit->getWhereId($id);
    //     // $this->M_products->delete($id);
    //     // $this->session->set_flashdata('flash', 'Dihapus');
    //     // redirect('admin/products');
    // }
}
?>