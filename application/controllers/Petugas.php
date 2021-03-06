<?php 
class Petugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Petugas');
	}

	public function index(){
		if($this->session->userdata('login')!= TRUE){
			redirect('login');
		}

		$data['title'] = "Data Petugas";
		$data['petugas'] = $this->M_Petugas->data_petugas();
		$this->template->load_admin('index','petugas',$data);
	}
	
	public function tambah(){
		if($this->session->userdata('login')!= TRUE){
			redirect('login');
		}

		$data['title'] = "Data Petugas";
		$data['subtitle'] = "Tambah Data Petugas";
		$this->template->load_admin('index','petugas_tambah',$data);		
	}

	public function simpan(){
		if($this->session->userdata('login')!= TRUE){
			redirect('login');
		}

		$this->M_Petugas->simpan();		
  		redirect(‘petugas_tambah’);
	}

}
