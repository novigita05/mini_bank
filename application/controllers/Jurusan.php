<?php

/**
 * 
 */
class Jurusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jurusan_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'Data Jurusan';

		$data['kelas_kategori'] = $this->Jurusan_model->get_jurusan();
		$this->load->view('index', $data);
		$this->load->view('jurusan/jurusan', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Data Jurusan';

		$this->form_validation->set_rules('kategori_kelas', 'Kategori_kelas', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
		    $this->load->view('jurusan/create');
		}
		
		else
		{
			$this->Jurusan_model->set_jurusan();
			$this->load->view('index', $data);
		    $this->load->view('jurusan/jurusan');
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
		$data['kelas_kategori'] = $this->Jurusan_model->get_jurusan_by_id($id);

		$this->form_validation->set_rules('kategori_kelas', 'Kategori_kelas', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
			$this->load->view('jurusan/edit', $data);
		}
		else
		{
			$this->Jurusan_model->set_jurusan($id);
			redirect(base_url() . 'jurusan/jurusan');
		}
	}

	 public function delete($id_kategori)
    {
        $id['id_kategori'] = $this->uri->segment(3);

        $data = $this->Jurusan_model->delete($id_kategori);

        redirect('jurusan/jurusan');

    }
}