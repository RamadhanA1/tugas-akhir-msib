<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model{
    public function __construct(){
        parent::__construct();
    } 
    
    
    public function get(){
        $this->db->select("*");
        $this->db->from('kategori');
        // $this->db->where('status', 'Disetujui');
        $get = $this->db->get();
        return $get->result_array();
    }

    
}
?>