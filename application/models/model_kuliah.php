<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_kuliah extends CI_Model
{
	function __construct(){
		parent::__construct();
		/*$this->kuliah= $this->load->database('kuliah', true);*/
		$this->load->database();
	}

	public function m_home(){
		$q = $this->db->query("SELECT SEMESTER,a.KD_MAKUL,NAMA_MAKUL,JML_SKS,
		HARI ||'.'||JAM AS WKTUJIAN,UJIAN_KE FROM tb_makul a INNER JOIN tb_nilai b ON (a.KD_MAKUL = b.KD_MAKUL) 
		ORDER BY SEMESTER, WKT_UJIAN");
		return $q->result();
		/*
		$this->db->select('a.SEMESTER,a.KD_MAKUL,b.UJIAN_KE');
		$this->db->from('tb_makul a'); 
		$this->db->join('tb_nilai b', 'a.KD_MAKUL=B.KD_MAKUL', 'left');
		$this->db->order_by('a.SEMESTER','ASC');   
		
		$query = $this->db->get();
		
		if($query->num_rows() != 0){
			return $query->result_array();
		}else{
			return false;
		}*/
	}

	public function m_nilai(){
		$q = $this->db->query("SELECT 
			tb_makul.KD_MAKUL,
			NAMA_MAKUL,
			SEMESTER,
			JML_SKS,
			WKT_UJIAN,
			UJIAN_KE,
			NILAI 
			FROM tb_makul LEFT JOIN tb_nilai ON 
			tb_makul.KD_MAKUL = tb_nilai.KD_MAKUL 
			ORDER BY 
			SEMESTER,
			HARI,
			JAM");
		return $q->result();
	}

	public function m_makul(){
		$q = $this->db->query("SELECT KD_MAKUL,NAMA_MAKUL FROM tb_makul ORDER BY KD_MAKUL,NAMA_MAKUL");
		return $q->result();
	}
	
	public function m_sks_ditempuh(){
		$q = $this->db->query("SELECT SUM(A.JML_SKS) AS JMLSKS FROM tb_makul A LEFT JOIN tb_nilai B ON (A.KD_MAKUL = B.KD_MAKUL) WHERE B.NILAI NOT IN ('D','E')");
		$hasil_query = $q->result();
		$hasil = $hasil_query[0];
		return $hasil->JMLSKS;	
	}
	
	public function m_cek_duplikasi($kdmakul,$ujianke){
		$x = $this->db->query("SELECT * FROM tb_nilai WHERE KD_MAKUL='$kdmakul' AND UJIAN_KE='$ujianke'");
		return $x->num_rows();
	}
	public function m_simpan($data){
		echo $this->db->insert("tb_nilai",$data);
	}

	public function m_hapus($kdmakul,$ujianke){
		$this->db->where("KD_MAKUL",$kdmakul);
		$this->db->where("UJIAN_KE",$ujianke);
		echo $this->db->delete("tb_nilai");
	}
}