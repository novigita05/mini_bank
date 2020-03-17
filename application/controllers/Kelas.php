<?php

/**
 * 
 */
class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'Data Kelas Siswa';

		$data['kelas'] = $this->Kelas_model->getAllKelas();
		$this->load->view('index', $data);
		$this->load->view('kelas/kelas', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Kelas';

		if($this->form_validation->run() == FALSE){
			$this->load->view('index', $data);
			$this->load->view('kelas/create');
		}else{
			echo "Berhasil";
		}

		
	}
}