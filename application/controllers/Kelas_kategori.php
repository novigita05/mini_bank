<?php

/**
 * 
 */
class Kelas_kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_kategori_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'Data Jurusan';

		$data['kelas_kategori'] = $this->Kelas_kategori_model->get_kelas_kategori();
		$this->load->view('index', $data);
		$this->load->view('kelas_kategori/kelas_kategori', $data);
	}

	public function create()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Tambah Data Jurusan';

		$this->form_validation->set_rules('id_jurusan', 'Id_jurusan', 'required');
		$this->form_validation->set_rules('kategori_kelas', 'Kategori_kelas', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
		    $this->load->view('kelas_kategori/create');
		}
		
		else
		{
			$this->Kelas_kategori_model->set_kelas_kategori();
			redirect(base_url() . 'kelas_kategori');
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

		$data['title'] = 'Edit Data Jurusan';
		$data['kelas_kategori_item'] = $this->Kelas_kategori_model->get_kelas_kategori_by_id($id);

		$this->form_validation->set_rules('id_jurusan', 'Id_jurusan', 'required');
		$this->form_validation->set_rules('kategori_kelas', 'Kategori_kelas', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
			$this->load->view('kelas_kategori/edit', $data);
		}
		else
		{
			$this->Kelas_kategori_model->set_kelas_kategori($id);
			redirect(base_url() . 'kelas_kategori');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$kelas_kategori_item = $this->Kelas_kategori_model->get_kelas_kategori_by_id($id);
		
		$this->Kelas_kategori_model->delete($id);
		redirect(base_url() . 'kelas_kategori');
	}
}