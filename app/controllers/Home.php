<?php

class Home extends Controller
{

	public function admin()
	{
		if (!isset($_SESSION["has_login"]) || $_SESSION["has_login"] == FALSE) header('location: ' . BASEURL . '/Home/login');

		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->getUser();

		$this->view('admin/templates/header', $data);
		$this->view('admin/index', $data);
		$this->view('admin/templates/footer');
	}

	public function karyawan()
	{
		if (!isset($_SESSION["has_login"]) || $_SESSION["has_login"] == FALSE) header('location: ' . BASEURL . '/Home/login');

		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->getUser();
		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->getUser();

		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/index', $data);
		$this->view('karyawan/templates/footer');
	}
	public function index()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['produk'] = $this->model('m_produk')->getProduk();
		$this->view('templates/header_bk', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer_bk');
	}
	public function visi()
	{
	$data['visi'] = $this->model('m_vimi')->getVisi();		
	$data['misi'] = $this->model('m_vimi')->getMisi();//$data['produk'] = $this->model('m_produk')->getProduk();

		$this->view('templates/header_bk', $data);
		$this->view('home/visim', $data);
		$this->view('templates/footer_bk');
	}
	
	public function produk()
	{
		$data['title'] = 'Produk Bank Sampah';
		$data['produk'] = $this->model('m_produk')->getProduk();

		$this->view('templates/header_bk', $data);
		$this->view('home/produk', $data);
		$this->view('templates/footer_bk');
	}
	public function jenis_sampah()
	{
		$data['title'] = 'Data Jenis Sampah';
		$data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
		$data['kat'] = $this->model('kat_sampah')->getAllkSampah();
		$this->view('templates/header_bk', $data);
		$this->view('home/jenis_sampah', $data);
		$this->view('templates/footer_bk');
	}
	public function portal()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['portal'] = $this->model('m_portal')->getPortal();

		$this->view('templates/header_bk', $data);
		$this->view('home/portal/index', $data);
		$this->view('templates/footer_bk');
	}
	public function transaksi()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['trans'] = $this->model('m_transaksi')->getAllTrx();

		$this->view('templates/header_bk', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer_bk');
	}
	public function detail($id)
	{
		$data['title'] = 'Detail Portal';
		$data['portal'] = $this->model('m_portal')->getAllPortalbyId($id);
		$this->view('templates/header_bk', $data);
		$this->view('home/portal/detail', $data);
		$this->view('templates/footer_bk');
	}

	public function login()
	{
		$data['title'] = 'Login Area';
		$data['user'] = $this->model('User_model')->getUser();

		$this->view('templates/header_awal_bk', $data);
		$this->view('home/login', $data);
		$this->view('templates/footer');
	}

	// public function loginAct()
	// {
	// 	if( $this->model('User_model')->cekUser($_POST) > 0) {
	// 		// Flasher::setMessage('Berhasil','login','success');
	// 		header('location: '. BASEURL . '/Home/Level');
	// 		exit;			
	// 	}else{
	// 		Flasher::setMessage('Gagal','login','danger');
	// 		header('location: '. BASEURL . '/Home/login');
	// 		exit;	
	// 	}
	// }

	public function loginAct()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->login();

		if ($data['user']['level'] == 'Admin') {
			header('location: ' . BASEURL . '/Home/admin');
			$_SESSION["nama_lengkap"] = $data['user']['nama_lengkap'];
			
			$_SESSION["has_login"] = TRUE;
			exit;
		} else if ($data['user']['level'] == 'Teller') {
			header('location: ' . BASEURL . '/Home/karyawan');
			$_SESSION["nama_lengkap"] = $data['user']['nama_lengkap'];
			$_SESSION["has_login"] = TRUE;
			exit;
		} else {
			Flasher::setMessage('Gagal', 'login', 'danger');
			header('location: ' . BASEURL . '/Home/login');
			exit;
		}



		// $this->view('templates/header', $data);
		// $this->view('home/index', $data);
		// $this->view('templates/footer');
	}

	public function logout()
	{
		$data['title'] = 'Login Area';
		$data['user'] = $this->model('User_model')->getUser();
		session_destroy();

		$this->view('templates/header_awal_bk', $data);
		$this->view('home/login', $data);
		$this->view('templates/footer');
	}
}
