<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->load->view('admin/template/header');
        $this->load->view('admin/home');
        $this->load->view('admin/template/footer');
    }
}
?>