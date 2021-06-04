
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function data_pasien($value='')
	{
		$query = $this->db->query("SELECT * FROM `pasien` LEFT JOIN bmi_pasien ON pasien.id_pasien = bmi_pasien.id_pasien");
		return $query->result();

	}

	public function data_pasien_where($id_pasien='')
	{
		$query = $this->db->query("SELECT * FROM `pasien` LEFT JOIN bmi_pasien ON pasien.id_pasien = bmi_pasien.id_pasien WHERE pasien.id_pasien = $id_pasien");
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

	public function save_edit($data='')
	{
		$this->db->where('id_pasien', $data['id_pasien']);
		$query = $this->db->update('pasien', $data);
		return $query;
	}

	public function save_editbmi($bmi_pasien='')
	{
		$this->db->where('id_pasien', $bmi_pasien['id_pasien']);
		$query = $this->db->update('bmi_pasien', $bmi_pasien);
		return $query;
	}

	public function hapus_pasien($id_pasien='')
	{
		$sql = "DELETE FROM `bmi_pasien` WHERE `bmi_pasien`.`id_pasien` = '$id_pasien'";
		$sql2 = "DELETE FROM `pasien` WHERE `pasien`.`id_pasien` = '$id_pasien'";
		$this->db->query($sql);
		return $this->db->query($sql2);
	}

}
