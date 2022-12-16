<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->load->view('Staff/template/header');
        $this->load->view('Staff/home');
        $this->load->view('Staff/template/footer');
    }
}
?>