<?php

/**
 * 
 */
class Logout extends Main_Controller
{
	public function logout_process(){
		session_start();
		session_destroy();
		header('Location: ' . BASE_URL . '/login');
	}
}