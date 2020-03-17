<?php

/**
 * 
 */
class Pegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['title'] = 'Data Pegawai';

		$data['pegawai'] = $this->Pegawai_model->get_pegawai();
		$this->load->view('index', $data);
		$this->load->view('pegawai/pegawai', $data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Tambah Pegawai';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required');
		$this->form_validation->set_rules('nuptk', 'Nuptk', 'required');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
		    $this->load->view('pegawai/create');
		}
		
		else
		{
			$this->Pegawai_model->set_pegawai();
			$this->load->view('index', $data);
		    $this->load->view('pegawai/pegawai');
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

		$data['title'] = 'Edit data pegawai';
		$data['pegawai_item'] = $this->Pegawai_model->get_pegawai_by_id($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'Nip', 'required');
		$this->form_validation->set_rules('nuptk', 'Nuptk', 'required');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('index', $data);
			$this->load->view('pegawai/edit', $data);
		}
		else
		{
			$this->pegawai_model->set_pegawai($id);
			redirect(base_url() . 'pegawai/pegawai');
		}
	}

	 public function delete($id_pegawai)
    {
        $id['id_pegawai'] = $this->uri->segment(3);

        $data = $this->Pegawai_model->delete($id_pegawai);

        redirect('pegawai/pegawai');

    }
}