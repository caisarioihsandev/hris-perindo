<?php

/**
 * 
 */
class Staff extends Main_Controller
{
	public function index()
	{
		$data['judul'] 	= 'Karyawan Perikanan Indonesia Cab. Belawan';
		$this->view('templates/header', $data);
		$this->view('templates/navbar', $data);
		$this->view('templates/sidebar', $data);
		$this->view('staff/index', $data);
		$this->view('templates/footer');
	}

	public function add_staff()
	{
		$data['judul'] = 'Form Tambah Karyawan';
		$data['sub-judul'] = 'Data Karyawan';
		$this->view('templates/header', $data);
		$this->view('templates/navbar', $data);
		$this->view('templates/sidebar', $data);
		$this->view('staff/add_staff', $data);
		$this->view('templates/footer');
	}



}