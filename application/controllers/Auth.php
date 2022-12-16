<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Base_controller.php';

class Auth extends Base_controller
{
	// protected $template = "template/auth/index";
	protected $auth = false;

	public function __construct()
	{
		parent::__construct();

		$this->load->model([
			'M_auth'
		]);
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			redirect(site_url('admin/Home'));
		}

		$this->load->view('login');
	}

	public function prosesLogin()
	{
		$form = $this->input->post();
		$email = $form['email'];
		$password = $form['password'];
		$password = hash('sha256', $password);

		$user = $this->M_auth->login($email, $password);

        // var_dump($user);
        // die;

		if ($user == null) {
			$this->session->set_flashdata('error', 'Email atau password salah!');
			redirect(site_url('Login'));
		}

		$this->session->set_userdata('user', $user);
		if ($this->session->userdata('user')->role_name == 'admin') {
			redirect(site_url('admin/Home'));
		}
		else if (($this->session->userdata('user')->role_name == 'staff')) {
			redirect(site_url('staff/Home'));
		}
		else {
			$this->session->set_flashdata('error', 'Akun tidak terdaftar!');
			redirect(site_url('Login'));
		}
		
	}

	public function logout()
	{
		// hapus user data
		$this->session->unset_userdata('user');
		// redirect ke halaman auth
		$this->session->set_flashdata('success', 'Anda berhasil logout');
		redirect(site_url('Auth'));
	}
}