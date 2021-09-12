<?php

/**
 * 
 */
class Dashboard extends Main_Controller
{	

	public function index()
	{
		if ($_SESSION['sess_login'] != 'sudah_login') {
			header('Location: ' . BASE_URL . '/admin/login');
		}
		

		$data['judul'] 	= 'Dashboard';
		$data['users'] = $this->model('User_model')->get_all_users();
		$data['url'] = "BASE_URL";

		$this->view('templates/header', $data);
		$this->view('templates/navbar', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer', $data);
	}



}