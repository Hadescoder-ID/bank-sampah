<?php

class Transaksi extends Controller {

	public function index()
	{
		$data['title'] = 'Data transaksi';
		$data['kur'] = $this->model('m_kurir')->getKurir();
		$data['kat'] = $this->model('kat_sampah')->getAllkSampah();
		$data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
		$data['trans'] = $this->model('m_transaksi')->getAllTrx();

		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/transaksi/index', $data);
		$this->view('karyawan/templates/footer');
	}
	public function tambah_transaksi()
	{
		$data['title'] = 'Tambah Transaksi';
		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/transaksi/tambah');
		$this->view('karyawan/templates/footer');
	}
	

	public function simpan_transaksi()
	{

		if ($this->model('m_transaksi')->tambahTrx($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Transaksi/index');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Transaksi/index');
			exit;
		}
	}
	public function edit_transaksi($id)
	{

		$data['title'] = 'Edit Data Transaksi';
		$data['trans'] = $this->model('tb_transaksi')->getAllTrxhById($id);
		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/transaksi/edit', $data);
		$this->view('karyawan/templates/footer');
	}
	public function update_transaksi()
	{
		if ($this->model('m_transaksi')->updateDataTrx($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Transaksi/index');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Transaksi/index');
			exit;
		}

	}



	public function hapus_transaksi($id)
	{
		if ($this->model('m_transaksi')->deleteTrx($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location:' . BASEURL . '/Transaksi/transaksi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location:' . BASEURL . '/Transaksi/transaksi');
			exit;
		}
	}

	public function getDataChangeTrx()
	{

		$id = $_POST['id'];	

		echo json_encode($this->model('m_transaksi')->getAllTrxById($id));
	}
	public function cariTrx()
	{
		$data['title'] = 'Data Transaksi';
		$data['trans'] = $this->model('m_transaksi')->getcariTrx();
		$this->view('karyawan/templates/header', $data);
		$this->view('karyawan/transaksi/index', $data);
		$this->view('karyawan/templates/footer');
	}
}