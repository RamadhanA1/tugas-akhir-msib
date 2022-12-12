<?php
class M_akun extends CI_Model
{

	public $userTable = 'akun';
	public $roleTable = 'roles';

	public function get()
	{
		$this->db->select([
			'u.id',
			'u.nama',
			'u.email',
            'u.password',
			'u.role_id',
			'r.name as role_name'
		]);
		// $this->db->where([
		// 	'u.email' 		=> $email,
		// 	'u.password'	=> $password
		// ]);
		$this->db->join($this->roleTable . ' r', 'r.id = u.role_id');
		return $this->db->get($this->userTable . ' u', )->result();
	}
}