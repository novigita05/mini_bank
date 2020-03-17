<?php
class Kelas_kategori_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_kelas_kategori($id_kategori = FALSE)
	{
		if ($id_kategori === FALSE)
		{
			$query = $this->db->get('kelas_kategori');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('kelas_kategori', array('id_kategori' => $id_kategori));
		return $query->row_array();
	}
	
	public function get_kelas_kategori_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('kelas_kategori');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('kelas_kategori', array('id_kategori' => $id));
		return $query->row_array();
	}
	
	public function set_kelas_kategori($id = 0)
	{
		$this->load->helper('url');

		$data = array (
 		   'id_jurusan' => $this->input->post('id_jurusan'),
 		   'kategori_kelas' => $this->input->post('kategori_kelas')
		);
		
		if ($id == 0) {
			return $this->db->insert('kelas_kategori', $data);
		} else {
			$this->db->where('id_kategori', $id);
			return $this->db->update('kelas_kategori', $data);
		}
	}
	
	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kelas_kategori');
	}
}