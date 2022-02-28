<?php

class User extends Controller {
	
    public function index()
    {
        $data['title'] = 'Data Karyawan';
        $data['karyawan'] = $this->model('m_karyawan')->getAllKaryawan();
        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }

}