
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function data_pasien($value='')
	{
		$query = $this->db->query('SELECT * FROM `pasien` LEFT JOIN bmi_pasien ON pasien.id_pasien = bmi_pasien.id_pasien
			');
		return $query->result();

	}

	public function save_tambah($data='')
	{
		return $this->db->insert('pasien',$data);
	}

	public function save_tambahbmi($bmi_pasien='')
	{
		return $this->db->insert('bmi_pasien',$bmi_pasien);
	}

}
