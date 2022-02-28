<?php

class Kurir extends Controller {

	public function kurir()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['kurir'] = $this->model('m_kurir')->getKurir();

		$this->view('admin/templates/header', $data);
		$this->view('admin/kurir/index', $data);
		$this->view('admin/templates/footer');
	}
	





}

	