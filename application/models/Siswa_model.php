<?php
class Siswa_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_siswa($id_siswa = FALSE)
	{
		if ($id_siswa === FALSE)
		{
			$query = $this->db->get('siswa');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('siswa', array('id_siswa' => $id_siswa));
		return $query->row_array();
	}
	
	public function get_siswa_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('siswa');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('siswa', array('id_siswa' => $id));
		return $query->row_array();
	}
	
	public function set_siswa($id = 0)
	{
		$this->load->helper('url');

		$data = array (
 		   'nis' => $this->input->post('nis'),
 		   'nik' => $this->input->post('nik'),
 		   'nisn' => $this->input->post('nisn'),
 		   'nama' => $this->input->post('nama'),
 		   'email' => $this->input->post('email'),
 		   'jenis_kelamin' => $this->input->post('jenis_kelamin'),
 		   'agama' => $this->input->post('agama'),
		   'rt' => $this->input->post('rt'),
		   'rw' => $this->input->post('rw'),
		   'dusun' => $this->input->post('dusun'),
		   'kelurahan' => $this->input->post('kelurahan'),
		   'kecamatan' => $this->input->post('kecamatan'),
		   'kode_pos' => $this->input->post('kode_pos'),
		   'jenis_tinggal' => $this->input->post('jenis_tinggal'),
		   'tempat_lahir' => $this->input->post('tempat_lahir'),
		   'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		   'alamat' => $this->input->post('alamat')
		);
		
		if ($id == 0) {
			return $this->db->insert('siswa', $data);
		} else {
			$this->db->where('id_siswa', $id);
			return $this->db->update('siswa', $data);
		}
	}
	
	public function delete($id)
	{
		$this->db->where('id_siswa', $id);
		return $this->db->delete('siswa');
	}
}