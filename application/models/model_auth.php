<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_auth extends CI_Model 
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function m_dataPengguna($nama,$kunci) {
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('nama',$nama);
		$this->db->where('kunci',$kunci);
		$query = $this->db->get();

		return $query;
	}

}
?>