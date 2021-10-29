<?php

class Crud extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}
	function index()
	{
		$data['user'] = $this->m_data->get_data()->result();
		$this->load->view('v_tampil', $data);
	}
	function tambah(){
		$this->load->view('v_tambah_mahasiswa');
	}
	function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama= $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$alamat= $this->input->post('alamat');

		$data = array (
			'nim' => $nim,
			'nama' => $nama,
			'kelas' => $kelas,
			'alamat' => $alamat
		);

		$this->m_data->simpan_data($data);
		redirect('Crud');
	}
	function edit($nim)
	{
		$where=array('nim' => $nim);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit', $data);
	}
	function update()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');

		$data = array (
			'nim' => $nim,
			'nama' => $nama,
			'kelas' => $kelas,
			'alamat' => $alamat
		);

		$where=array('nim' => $nim);
		$this->m_data->update_data($where, $data, 'user');
		redirect('Crud');
	}
	function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_data->hapus_data($where, 'user');
		redirect('Crud');
	}
}

