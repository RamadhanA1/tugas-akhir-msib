<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require APPPATH . 'core/Base_controller.php';
class Hero extends CI_Controller
{
    // public $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'M_heroUnit'
        ]);
    }

    public function index()
    {
        // $this->data['title'] = "akun";
        $this->data['hero_unit'] = $this->M_heroUnit->get();
        $this->data['hero_unit'] = $this->load->view('admin/hero', $this->data, true);
        $this->load->view('admin/template/header');
        $this->load->view('admin/hero');
        $this->load->view('admin/template/footer');
    }

    public function tambah()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/hero/tambah');
        $this->load->view('admin/template/footer');
    }

    public function upload()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = 10000;
        $config['max_width'] = 2048;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $error = array('error' => $this->upload->display_errors());


            echo 'upload gagal';

            // $this->load->view ('upload_form', $error);
        } else {
            $data = $this->upload->data();

            $input = $this->input->post();
            $status = $this->input->post();

            $hero['img'] = $data['file_name'];
            $hero['headline'] = $input['headline'];
            $hero['text'] = $input['text'];
            $hero['status'] = $status['status'];

            $this->db->insert('hero_unit', $hero);
            if ($this->db->affected_rows() > 0) {
                // echo 'data berhasil disimpan';
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/Hero');
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

    public function hapus($id)
    {
        $this->M_heroUnit->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/Hero');
    }

    public function ubah($id)
    {
        $data['hero_unit'] = $this->M_heroUnit->getWhereId($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/hero/ubah', $data);
        $this->load->view('admin/template/footer');
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = 10000;
        $config['max_width'] = 2048;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            // $error = array('error' => $this->upload->display_errors());


            // echo 'upload gagal';

            // $this->load->view ('upload_form', $error);
        } else {
            $data = $this->upload->data();
            $hero['img'] = $data['file_name'];



            // $data = array('upload_data' => $this->upload->data());
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // die;

            // $this->load->view ('upload-success', $data);
        }
        $input = $this->input->post();
        $status = $this->input->post();

        $hero['headline'] = $input['headline'];
        $hero['text'] = $input['text'];
        $hero['status'] = $status['status'];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('hero_unit', $hero);
        if ($this->db->affected_rows() > 0) {
            // echo 'data berhasil disimpan';
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/Hero');
        } else {
            echo 'data tidak ada yang diubah';
        }
    }
}
