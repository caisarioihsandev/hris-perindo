<?php

/**
 * 
 */
class Home extends Main_Controller
{
	public function index() 
	{
		$data['judul'] 	= 'ViyoriPro';
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}