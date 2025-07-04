<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require APPPATH . 'core/Base_controller.php';
class Akun extends CI_Controller{
    // public $data = array();

    public function __construct()
	{
        // testing push
		parent::__construct();
		$this->load->model([
			'M_akun'
		]);
	}
    
    public function index(){
        $this->data['title'] = "akun";
		$this->data['akun'] = $this->M_akun->get();
        $this->data['akun'] = $this->load->view('admin/akun', $this->data, true);
        $this->load->view('admin/template/header');
        $this->load->view('admin/akun');
        $this->load->view('admin/template/footer');
    }
}
?>