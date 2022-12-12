<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_products extends CI_Model{
    public function __construct(){
        parent::__construct();
    } 
    
    
    public function getProducts(){
        $this->db->select("*");
        $this->db->from('products');
        $this->db->where('status', 'Disetujui');
        $get = $this->db->get();
        return $get->result_array();
    }

    public $productsTable = 'products';
	public $kategoriTable = 'kategori';

	public function get()
	{
		$this->db->select([
			'p.id',
            'p.link',
            'p.nama',
            'p.harga',
            'p.deskripsi',
            'p.img',
            'p.status',
            'k.name as kategori_name'
            
		]);
		// $this->db->where([
		// 	'u.email' 		=> $email,
		// 	'u.password'	=> $password
		// ]);
		$this->db->join($this->kategoriTable . ' k', 'k.id = p.kategori_id');
		return $this->db->get($this->productsTable . ' p', )->result();
	}
}
?>