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
}
