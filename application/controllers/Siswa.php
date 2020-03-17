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

		$data['siswa'] = $this->Siswa_model->get_siswa();
		$this->load->view('index', $data);
		$this->load->view('siswa/siswa', $data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Tambah Siswa';

		$this->form_validation->set_rules('nis', 'Nis', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nisn', 'Nisn', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('rt', 'Rw', 'required');
		$this->form_validation->set_rules('rw', 'Rt', 'required');
		$this->form_validation->set_rules('dusun', 'Dusun', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required');
		$this->form_validation->set_rules('jenis_tinggal', 'Jenis_tinggal', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
		    $this->load->view('siswa/create');
		}
		
		else
		{
			$this->Siswa_model->set_siswa();
			redirect(base_url() . 'siswa');
		}	
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		if (empty($id))
		{
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit data siswa';
		$data['siswa_item'] = $this->Siswa_model->get_siswa_by_id($id);

		$this->form_validation->set_rules('nis', 'Nis', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nisn', 'Nisn', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('rt', 'Rw', 'required');
		$this->form_validation->set_rules('rw', 'Rt', 'required');
		$this->form_validation->set_rules('dusun', 'Dusun', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kode_pos', 'Kode_pos', 'required');
		$this->form_validation->set_rules('jenis_tinggal', 'Jenis_tinggal', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
			$this->load->view('siswa/edit', $data);
		}
		else
		{
			$this->Siswa_model->set_siswa($id);
			redirect(base_url() . 'siswa');
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

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$siswa_item = $this->Siswa_model->get_siswa_by_id($id);
		
		$this->Siswa_model->delete($id);
		redirect(base_url() . 'siswa');
	}
}