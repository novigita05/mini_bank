<?php

/**
 * 
 */
class Siswa_model extends CI_model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getAllSiswa()
	{
		return $this->db->get('siswa')->result_array();
	}
}