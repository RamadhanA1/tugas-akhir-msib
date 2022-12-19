<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require APPPATH . 'core/Base_controller.php';
class Products extends CI_Controller
{
    // public $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'M_products'
        ]);
    }

    public function index()
    {
        // $this->data['title'] = "akun";
        $this->data['products'] = $this->M_products->get();
        $this->data['products'] = $this->load->view('staff/products', $this->data, true);
        $this->load->view('staff/template/header');
        $this->load->view('staff/products');
        $this->load->view('staff/template/footer');
    }

    public function tambah()
    {
        $this->load->view('staff/template/header');
        $this->load->view('staff/products/tambah');
        $this->load->view('staff/template/footer');
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
                // echo 'data berhasil disimpan';
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('staff/products');
            } else {
                echo 'data gagal disimpan';
            }
        }
    }

    public function hapus($id)
    {
        $this->M_products->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('staff/products');
    }

    public function ubah($id)
    {
        $data['products'] = $this->M_products->getWhereId($id);
        $this->load->view('staff/template/header');
        $this->load->view('staff/products/ubah', $data);
        $this->load->view('staff/template/footer');
    }

    public function simpan()
    {
        // $this->M_products->ubah();
        // $this->session->set_flashdata('flash', 'diubah');
        // redirect('staff/products');
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
        }
        $kategori_id = $this->input->post();
        $input = $this->input->post();
        $status = $this->input->post();

        $hero['kategori_id'] = $kategori_id['kategori_id'];
        $hero['nama'] = $input['nama'];
        $hero['harga'] = $input['harga'];
        $hero['deskripsi'] = $input['deskripsi'];
        $hero['link'] = $input['link'];
        $hero['status'] = $status['status'];

        // $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('products', $hero);
        if ($this->db->affected_rows() > 0) {
            // echo 'data berhasil disimpan';
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('staff/products');
        } else {
            echo 'data tidak ada yang diubah';
        }
    }
}
