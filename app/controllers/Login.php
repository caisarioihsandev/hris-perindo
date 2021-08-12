<?php

/**
 * 
 */
class Login extends Main_Controller
{

	public function index()
	{

		if(isset($_SESSION['sess_login'])) {
			header('Location: ' . BASE_URL . '/dashboard');
		}

		$data['judul'] 	= 'Login System';

		// $pass = hash_password('sdmperindocabangbelawan2021');
		// echo $pass;

		$this->view('dashboard/login', $data);
		
	}

	public function login_process(){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$row = $this->model('User_model')->get_user_by_username($username);
		

		if ($row) {
			$bool_test = check_password($password, $row['user_password']);
			// var_dump($bool_test);
			if ($bool_test) 
			{
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['sess_login'] = 'sudah_login';
				header('Location: ' . BASE_URL . '/dashboard');
			} else {
				Flasher::setFlash('Password ', 'is not valid', 'danger');
				header('Location: ' . BASE_URL . '/login');
				exit();
			}
			
		} else {
			Flasher::setFlash('Username ', 'is not found', 'danger');
			header('Location: ' . BASE_URL . '/login');
			exit();
		}
	}
}