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

    public $heroTable = 'hero_unit';
	// public $roleTable = 'roles';

	public function get()
	{
		$this->db->select([
			'h.id',
            'h.headline',
            'h.text',
            'h.img',
            'h.status'
		]);
		// $this->db->where([
		// 	'u.email' 		=> $email,
		// 	'u.password'	=> $password
		// ]);
		// $this->db->join($this->roleTable . ' r', 'r.id = u.role_id');
		return $this->db->get($this->heroTable . ' h', )->result();
	}
}
?>