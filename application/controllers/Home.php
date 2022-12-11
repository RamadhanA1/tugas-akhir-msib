<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->load->model('M_heroUnit');
        $data['hero'] = $this->M_heroUnit->getHero();
        $this->load->view('index', $data);
    }
}
?>