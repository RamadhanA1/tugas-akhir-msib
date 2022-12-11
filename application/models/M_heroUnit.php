<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_heroUnit extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    
    public function getHero(){
        $this->db->select("*");
        $this->db->from('hero_unit');
        $this->db->where('status', 'Disetujui');
        $get = $this->db->get();
        return $get->result_array();
    }
}
?>