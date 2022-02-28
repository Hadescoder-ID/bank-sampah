<?php

class Karyawan extends Controller {

	public function index()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->getUser();

		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/index', $data);
		$this->view('karyawan/templates/footer');

    }
    
    

}