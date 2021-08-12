<?php

/**
 * 
 */
class Product extends Main_Controller
{
	public function index()
	{
		$data['judul'] 	= 'ViyoriPro Product';
		$this->view('templates/header', $data);
		$this->view('product/index', $data);
		$this->view('templates/footer');
	}
}