<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

		$this->load->model('model_mahasiswa');
    }

	public function index()
	{
		$judul	= "Data Mahasiswa";
		$data_mahasiswa = $this->model_mahasiswa->all();

		$this->load->view('mahasiswa_list',compact('judul','data_mahasiswa'));
	}

	public function create()
	{
		$judul	= "Tambah Data Mahasiswa";

		$this->load->view('mahasiswa_create',compact('judul'));
	}

	public function add()
	{
		$data['nama']  			= $this->input->post('nama');
		$data['nim']  			= $this->input->post('nim');
		$data['fakultas']  		= $this->input->post('fakultas');
		$data['tahun_masuk']  	= $this->input->post('tahun_masuk');

		$this->model_mahasiswa->add($data);
		redirect('mahasiswa');
	}

	public function update($id)
	{
		$param['id'] = $id;
		$data_mhs = $this->model_mahasiswa->get($param);

		$judul = "Ubah Data Mahasiswa";

		$this->load->view('mahasiswa_update',compact('judul','data_mhs'));


	}

	public function edit()
	{
		$id['id'] = $this->input->post('id');

		$data['nama']  			= $this->input->post('nama');
		$data['nim']  			= $this->input->post('nim');
		$data['fakultas']  		= $this->input->post('fakultas');
		$data['tahun_masuk']  	= $this->input->post('tahun_masuk');

		$this->model_mahasiswa->update($id, $data);
		redirect('mahasiswa');

	}

	public function delete($id)
	{
		$param['id'] = $id;
		$data_mhs = $this->model_mahasiswa->get($param);

		$judul = "Hapus Data Mahasiswa";
		$this->load->view('mahasiswa_delete',compact('judul','data_mhs'));

	}

	public function del()
	{
		$id['id'] = $this->input->post('id');
		$this->model_mahasiswa->delete($id);

		redirect('mahasiswa');

	}
}
