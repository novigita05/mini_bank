<?php

/**
 * 
 */
class Kelas_model extends CI_model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getAllKelas()
	{
		return $this->db->get('kelas')->result_array();
	}
}