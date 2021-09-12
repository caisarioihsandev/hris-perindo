<?php

/**
 * 
 */
class User extends Main_Controller
{	
	public function __construct() {
		if ($_SESSION['sess_login'] != 'sudah_login') {
			header('Location: ' . BASE_URL . '/admin/login');
		}
	}

	public function index()
	{
		$data['judul'] 	= 'User List';
		$data['users'] = $this->model('User_model')->get_all_users();

		$this->view('view-admin/header', $data);
		$this->view('view-admin/user', $data);
		$this->view('view-admin/footer');
	}

	public function add(){
		$data['judul'] 	= 'Add New User';
		$data['users'] = $this->model('User_model')->get_all_users();

		$this->view('view-admin/header', $data);
		$this->view('view-admin/user_add', $data);
		$this->view('view-admin/footer');
	}

	public function add_process(){
		if ($this->model('User_model')->add_user($_POST) > 0) {
			Flasher::setFlash('Successed', 'to added', 'success');
			header('Location: ' . BASE_URL . '/admin/user');
			exit();
		} else {
			Flasher::setFlash('Failed', 'to added', 'danger');
			header('Location: ' . BASE_URL . '/admin/user/add');
			exit();
		}
	}

	public function edit($username)
	{
		$data['judul'] 	= 'Edit User';

		if ($row = $this->model('User_model')->get_user_by_username($username)) {
			$data['id'] = $row['user_id'];
			$data['username'] = $row['user_name'];
			$data['password'] = $row['user_password'];
			$data['email'] = $row['user_email'];
		}

		$this->view('view-admin/header', $data);
		$this->view('view-admin/navbar', $data);
		$this->view('view-admin/user_edit', $data);
		$this->view('view-admin/footer');
	}

	public function edit_process(){
		if ($this->model('User_model')->edit_user($_POST) > 0) {
			Flasher::setFlash('Successed', 'to edited', 'success');
			header('Location: ' . BASE_URL . '/admin/user');
			exit();
		} else {
			Flasher::setFlash('Failed', 'to edited', 'danger');
			header('Location: ' . BASE_URL . '/admin/user/add');
			exit();
		}
	}

	public function remove($id)
	{
		if ($this->model('User_model')->remove_user($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASE_URL . '/admin/user');
			exit();
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASE_URL . '/admin/user');
			exit();
		}
	}

}