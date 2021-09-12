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

	public function add_process()
	{
		if ($this->model('Staff_model')->add_staff($_POST, $_FILES) > 0) {
			$data = $this->model('Staff_model')->add_staff($_POST, $_FILES);
			Flasher::setFlash($data, 'to added', 'success');
			header('Location: ' . BASE_URL . '/staff');
			exit();
		} else {
			Flasher::setFlash('Failed', 'to added', 'danger');
			header('Location: ' . BASE_URL . '/staff/add_staff');
			exit();
		}
	}



}