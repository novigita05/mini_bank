<?php
class Jurusan_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_jurusan($id_kategori = FALSE)
	{
		if ($id_kategori === FALSE)
		{
			$query = $this->db->get('kelas_kategori');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('kelas_kategori', array('id_kategori' => $id_kategori));
		return $query->row_array();
	}
	
	public function get_jurusan_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('kelas_kategori');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('kelas_kategori', array('id_kategori' => $id));
		return $query->row_array();
	}
	
	public function set_jurusan($id = 0)
	{
		$this->load->helper('url');

		$data = array (
 		   'id_kategori' => $this->input->post('id_kategori'),
 		   'kategori_kelas' => $this->input->post('kategori_kelas')
		);
		
		if ($id == 0) {
			return $this->db->insert('kelas_kategori', $data);
		} else {
			$this->db->where('id_kategori', $id);
			return $this->db->update('kelas_kategori', $data);
		}
	}
	
	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$kelas_kategori = $this->Jurusan_model->get_jurusan_by_id($id);
		
		$this->Jurusan_model->delete($id);
		redirect(base_url() . 'jurusan/jurusan');
	}
}