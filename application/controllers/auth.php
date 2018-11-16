<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('model_auth');
	}

	public function index(){
		if($this->session->userdata('status_login')!== "ON"){
			redirect('auth/halaman_login');			
		}
	}

	public function halaman_login(){
		//$this->load->view("welcome_message");
		$this->load->view("halaman_depan");
	}

	public function cek_login()
	{
		$nama=$this->input->post("nama");
		$kunci=$this->input->post("kunci");

		$hasil=$this->model_auth->m_dataPengguna($nama,$kunci);

		if($hasil->num_rows()==1)
		{
			foreach ($hasil->result() as $sess) {
				$data_session["status_login"]="ON";
				$data_session["nama"]=$sess->nama;
				$this->session->set_userdata($data_session);
			}

			redirect("kuliah");
		}else{
			redirect("auth/halaman_login");
		}
	}

	public function logout()
	{
		$this->load->library("session");
		$this->session->sess_destroy();
		redirect("auth/halaman_login");
	}
}