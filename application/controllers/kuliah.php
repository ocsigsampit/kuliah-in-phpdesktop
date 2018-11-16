<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Kuliah extends CI_Controller
{

	function __construct(){
		parent::__construct();
		/*$this->load->helper(array('url'));*/
		$this->load->model('model_kuliah');

	}

	public function index(){
		if($this->session->userdata('status_login')=="ON"){
			$data['semua'] = $this->model_kuliah->m_home();
			$this->load->view('kuliah/header');
			$this->load->view('kuliah/v_nav');
			$this->load->view('kuliah/v_semua',$data);
		}else{
			redirect('auth');
		}
	}

	public function nilai(){
		if($this->session->userdata('status_login')=="ON"){
			$data['semua']        = $this->model_kuliah->m_nilai();
			$data['sks_ditempuh'] = $this->model_kuliah->m_sks_ditempuh();
			$this->load->view('kuliah/header');
			$this->load->view('kuliah/v_nav');
			$this->load->view('kuliah/v_nilai',$data);
		}else{
			redirect('auth');
		}
	}

	public function tambah(){
		if($this->session->userdata('status_login')=="ON"){
			$data['makul'] = $this->model_kuliah->m_makul();
			$this->load->view('kuliah/header');
			$this->load->view('kuliah/v_nav');
			$this->load->view('kuliah/v_tambah',$data);
		}else{
			redirect('auth');
		}
	}

	public function simpan(){
		date_default_timezone_set("Asia/Jakarta");

		$hasil_cek = $this->model_kuliah->m_cek_duplikasi($this->input->post("kd_makul"),$this->input->post("ujian_ke"));
		if($hasil_cek == 0){
			$data = array(
				"KD_MAKUL"  => $this->input->post("kd_makul"),
				"UJIAN_KE"  => $this->input->post("ujian_ke"),
				"NILAI"     => $this->input->post("nilai"),
				"TGL_REKAM" => date("Y-m-d H:i:s")
			);
			$this->model_kuliah->m_simpan($data);
		}else{
			redirect("kuliah/nilai");
		}
		
	}

	public function admin(){
		$this->load->view('kuliah/header');
		$this->load->view('kuliah/admin');
	}

	public function autocomplete_makuls(){
    	$makuls[] = $this->model_kuliah->m_makul();
    	echo json_encode($makuls[0]);
    }
	
	public function hapus(){
		if($_POST){
			$this->model_kuliah->m_hapus($this->input->post("kdmakul"),$this->input->post("ujianke"));
		}
	}

function cari($kode){


$nopol = array("AE"=> "Madiun","AD" => "Solo");

return $nopol[$kode];
}


function plat($kodene){
echo "Kode plat ".$kodene." karesidenan ".$this->cari($kodene);
}

}