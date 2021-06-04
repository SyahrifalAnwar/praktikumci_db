<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->model('M_data');
		$data = array(
			'isi' => 'page',
			'data_pasien' => $this->M_data->data_pasien());
		$this->load->view('base', $data);
	}

	public function login($value='')
	{
		$this->load->view('login');
	}

	public function tambah($value='')
	{
		$this->load->view('tambah');
	}

	public function edit($id_pasien='')
	{
		$this->load->model('M_data');
		$data['data_pasien'] = $this->M_data->data_pasien_where($id_pasien);
		$this->load->view('edit', $data);
	}

	public function detail($id_pasien='')
	{
		$this->load->model('M_data');
		$data['data_pasien'] = $this->M_data->data_pasien_where($id_pasien);
		$this->load->view('detail', $data);
	}

	public function save_tambah($value='')
	{
		$this->load->model('M_data');

		$get_user = $this->M_data->data_pasien();
		$no = 0;
		foreach ($get_user as $get_user) {$no++;}

		$id = $no + 1;

		$data = array(
			'id_pasien' => $id,
			'kode' => 'PSN'.$id,
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'email' => $this->input->post('email')
	);

		$bmi_pasien = array(
			'id_pasien' => $id,
			'tanggal' => date('Y-m-d'),
			'berat' => $this->input->post('bb'),
			'tinggi' => $this->input->post('tb'),
			'bmi' => $this->input->post('bmi'),
			'status_bmi' => $this->input->post('status_bmi'),
			'catatan' => $this->input->post('catatan')
	);
		
		$this->M_data->save_tambah($data);
		$this->M_data->save_tambahbmi($bmi_pasien);
		redirect('page');
	}

	public function save_edit($id_pasien='')
	{
		$this->load->model('M_data');
		
		$data = array(
			'id_pasien' => $id_pasien,
			'kode' => 'PSN'.$id_pasien,
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'email' => $this->input->post('email')
	);

		$bmi_pasien = array(
			'id_pasien' => $id_pasien,
			'tanggal' => date('Y-m-d'),
			'berat' => $this->input->post('bb'),
			'tinggi' => $this->input->post('tb'),
			'bmi' => $this->input->post('bmi'),
			'status_bmi' => $this->input->post('status_bmi'),
			'catatan' => $this->input->post('catatan')
	);
		
		$this->M_data->save_edit($data);
		$this->M_data->save_editbmi($bmi_pasien);
		redirect('page');
	}
}
