<?php
class Pegawai_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_pegawai($id_pegawai = FALSE)
	{
		if ($id_pegawai === FALSE)
		{
			$query = $this->db->get('pegawai');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('pegawai', array('id_pegawai' => $id_pegawai));
		return $query->row_array();
	}
	
	public function get_pegawai_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('pegawai');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('pegawai', array('id_pegawai' => $id));
		return $query->row_array();
	}
	
	public function set_pegawai($id = 0)
	{
		$this->load->helper('url');

		$data = array (
 		   'nip' => $this->input->post('nip'),
 		   'nuptk' => $this->input->post('nuptk'),
 		   'nama' => $this->input->post('nama'),
 		   'email' => $this->input->post('email'),
 		   'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		   'status' =>$this->input->post('status'),
		   'no_telp' => $this->input->post('no_telp')
		);
		
		if ($id == 0) {
			return $this->db->insert('pegawai', $data);
		} else {
			$this->db->where('id_pegawai', $id);
			return $this->db->update('pegawai', $data);
		}
	}
	
	public function delete($id)
	{
		$this->db->where('id_pegawai', $id);
		return $this->db->delete('pegawai');
	}
}