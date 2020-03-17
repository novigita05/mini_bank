<?php

/**
 * 
 */
class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'Data Siswa';

		$data['siswa'] = $this->Siswa_model->getAllSiswa();
		$this->load->view('index', $data);
		$this->load->view('siswa/siswa', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Siswa';

		if($this->form_validation->run() == FALSE){
			$this->load->view('index', $data);
			$this->load->view('siswa/create');
		}else{
			echo "Berhasil";
		}
	}

	public function create_orangtua()
	{
		$data['title'] = 'Data OrangTua';

		if($this->form_validation->run() == FALSE){
			$this->load->view('index', $data);
			$this->load->view('siswa/create_orangtua');
		}else{
			echo "Berhasil";
		}
	}

	public function create_wali()
	{
		$data['title'] = 'Data Wali';

		if($this->form_validation->run() == FALSE){
			$this->load->view('index', $data);
			$this->load->view('siswa/create_wali');
		}else{
			echo "Berhasil";
		}
	}

	public function create_lainnya()
	{
		$data['title'] = 'Data Lainnya';

		if($this->form_validation->run() == FALSE){
			$this->load->view('index', $data);
			$this->load->view('siswa/create_lainnya');
		}else{
			echo "Berhasil";
		}
	}
}