<?php

class Admin extends Controller
{

	function __construct()
	{
		if (!isset($_SESSION["has_login"]) || $_SESSION["has_login"] === FALSE) header('location: ' . BASEURL . '/Home/login');
	}

	public function index()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['user'] = $this->model('User_model')->getUser();

		$this->view('admin/templates/header', $data);
		$this->view('admin/index', $data);
		$this->view('admin/templates/footer');
	} //transaksi

	public function transaksi()
	{
		$data['title'] = 'Data transaksi';
		$data['kur'] = $this->model('m_kurir')->getKurir();
		$data['kat'] = $this->model('kat_sampah')->getAllkSampah();
		$data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
		$data['trans'] = $this->model('m_transaksi')->getAllTrx();

		$this->view('admin/templates/header', $data);
		$this->view('admin/transaksi/index', $data);
		$this->view('admin/templates/footer');
	}
	public function tambah_transaksi()
	{
		$data['title'] = 'Tambah Transaksi';
		$this->view('admin/templates/header', $data);
		$this->view('admin/transaksi/tambah');
		$this->view('admin/templates/footer');
	}
	public function cariTrx()
	{
		$data['title'] = 'Data Transaksi';
		$data['trans'] = $this->model('m_transaksi')->getcariTrx();
		$this->view('admin/templates/header', $data);
		$this->view('admin/transaksi/index', $data);
		$this->view('admin/templates/footer');
	}
	public function cetaktrx()
	{
		$data['title'] = 'Data transaksi';
		$data['kur'] = $this->model('m_kurir')->getKurir();
		$data['kat'] = $this->model('kat_sampah')->getAllkSampah();
		$data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
		$data['trans'] = $this->model('m_transaksi')->getAllTrx();
		$this->view('admin/transaksi/cetak', $data);
	}

	public function simpan_transaksi()
	{

		if ($this->model('m_transaksi')->tambahTrx($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/transaksi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/transaksi');
			exit;
		}
	}
	public function edit_transaksi($id)
	{

		$data['title'] = 'Edit Data Transaksi';
		$data['trans'] = $this->model('tb_transaksi')->getAllTrxhById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/transaksi/edit', $data);
		$this->view('admin/templates/footer');
	}
	public function update_transaksi()
	{
		if ($this->model('m_transaksi')->updateDataTrx($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Admin/transaksi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Admin/transaksi');
			exit;
		}
	}



	public function hapus_transaksi($id)
	{
		if ($this->model('m_transaksi')->deleteTrx($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location:' . BASEURL . '/Admin/transaksi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location:' . BASEURL . '/Admin/transaksi');
			exit;
		}
	}

	public function getDataChangeTrx()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_transaksi')->getAllTrxById($id));
	}


	//portal
	public function portal()
	{
		$data['title'] = 'Data Portal';
		$data['portal'] = $this->model('m_portal')->getPortal();
		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/index', $data);
		$this->view('admin/templates/footer');
	}
	public function detail_portal($id)
	{
		$data['title'] = 'Detail Portal';
		$data['portal'] = $this->model('m_portal')->getAllPortalbyId($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/detail', $data);
		$this->view('admin/templates/footer');
	}
	public function tambah_portal()
	{
		$data['title'] = 'Tambah Portal';
		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/tambah');
		$this->view('admin/templates/footer');
	}
	public function editportal($id)
	{

		$data['title'] = 'Edit Data Portal';
		$data['portal'] = $this->model('m_portal')->getAllPortalById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/edit', $data);
		$this->view('admin/templates/footer');
	}


	public function simpanPortal()
	{

		$test = array($_POST,$_FILES["gambar"]);
		
		if ($this->model('m_portal')->tambahdPortal($test) > 0 ) {

			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		}
	}
		public function cariberita()
	{
		$data['title'] = 'Data Berita';
		$data['portal'] = $this->model('m_portal')->getcariberita();
		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/index', $data);
		$this->view('admin/templates/footer');
	}



	public function update_portal()
	{
		$test = array($_POST,$_FILES["gambar"]);

		// print_r($test);
		// die();
		
		if ($this->model('m_portal')->updateDataPortal($test) > 0 ) {

			Flasher::setMessage('Berhasil', 'di Update', 'success');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'di Update', 'danger');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		}
		
	}

	public function hapus_portal($id)
	{
		if ($this->model('m_portal')->deletePortal($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/portal');
			exit;
		}
	}



	public function getDataChangePortal()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_portal')->getAllPortalById($id));
	}

	//jenis sampah
	public function jenis_sampah()
	{
		$data['title'] = 'Data Jenis Sampah';
		$data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
		$data['kat'] = $this->model('kat_sampah')->getAllkSampah();
		$this->view('admin/templates/header', $data);
		$this->view('admin/jnsampah/index', $data);
		$this->view('admin/templates/footer');
	}


	public function edit_jenis_sampah($id)
	{

		$data['title'] = 'Edit Data jenis';
		$data['mhs'] = $this->model('jns_sampah')->getAllJnSampahById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/jnsampah/edit', $data);
		$this->view('admin/templates/footer');
	}

	public function tambah_jenis_sampah()
	{
		$data['title'] = 'Tambah Jenis Sampah';
		$this->view('admin/templates/header', $data);
		$this->view('admin/jnsampah/tambah');
		$this->view('admin/templates/footer');
	}

	public function simpan_jenis_sampah()
	{

		if ($this->model('jns_sampah')->tambahJnSampah($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		}
	}
	public function update_jenis_sampah()
	{
		if ($this->model('jns_sampah')->updateDataJenis($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		}
	}

	public function hapus_jenis_sampah($id)
	{
		if ($this->model('jns_sampah')->deleteJns($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/jenis_sampah');
			exit;
		}
	}
	public function cariJns()
	{
		$data['title'] = 'Data Kategori sampah';
		$data['jns_smp'] = $this->model('jns_sampah')->getcariJns();
		$this->view('admin/templates/header', $data);
		$this->view('admin/jnsampah/index', $data);
		$this->view('admin/templates/footer');
	}


	public function getDataChangejns()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('jns_sampah')->getAllJnSampahById($id));
	}





	//kategori sampah
	public function kat_sampah()
	{
		$data['title'] = 'Data Kategori sampah';
		$data['k_smp'] = $this->model('kat_sampah')->getAllkSampah();
		$this->view('admin/templates/header', $data);
		$this->view('admin/ksampah/index', $data);
		$this->view('admin/templates/footer');
	}
	public function cariKat()
	{
		$data['title'] = 'Data Kategori sampah';
		$data['k_smp'] = $this->model('kat_sampah')->getCarikSampah();
		$this->view('admin/templates/header', $data);
		$this->view('admin/ksampah/index', $data);
		$this->view('admin/templates/footer');
	}


	public function tambah_kat_sampah()
	{
		$data['title'] = 'Tambah Kategori sampah';
		$this->view('admin/templates/header', $data);
		$this->view('admin/ksampah/tambah');
		$this->view('admin/templates/footer');
	}
	public function edit_kat_sampah($id)
	{

		$data['title'] = 'Edit Data Kategori sampah';
		$data['kat'] = $this->model('kat_sampah')->getAllkSampahById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/ksampah/edit', $data);
		$this->view('admin/templates/footer');
	}
	/*public function pagination_kat()
	{
		$data['title'] = 'Data Kategori sampah';
		$data['kat'] = $this->model('kat_sampah')->pagination();
		$this->view('admin/templates/header', $data);
		$this->view('admin/ksampah/index', $data);
		$this->view('admin/templates/footer');
	}*/


	public function simpankatsampah()
	{

		if ($this->model('kat_sampah')->tambahkSampah($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		}
	}

	public function update_kat_sampah()
	{
		if ($this->model('kat_sampah')->updateDataKat($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		}
	}

	public function hapus_kat_sampah($id)
	{
		if ($this->model('kat_sampah')->deleteK($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/kat_sampah');
			exit;
		}
	}


	public function getDataChangeKat()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('kat_sampah')->getAllkSampahById($id));
	}
	//karyawan



	public function karyawan()
	{
		$data['title'] = 'Data Karyawan';
		$data['karyawan'] = $this->model('m_karyawan')->getAllkar();
		$this->view('admin/templates/header', $data);
		$this->view('admin/karyawan/index', $data);
		$this->view('admin/templates/footer');
	}

	public function edit_karyawan($id)
	{

		$data['title'] = 'Edit Data Karyawan';
		$data['kar'] = $this->model('m_karyawan')->getAllKaryawanById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/karyawan/edit', $data);
		$this->view('admin/templates/footer');
	}

	public function tambah_karyawan()
	{
		$data['title'] = 'Tambah Data Karyawan';
		$this->view('admin/templates/header', $data);
		$this->view('admin/karyawan/tambah');
		$this->view('admin/templates/footer');
	}
	public function cariKar()
	{
		$data['title'] = 'Data Karyawan';
		$data['karyawan'] = $this->model('m_karyawan')->getcariKar();
		$this->view('admin/templates/header', $data);
		$this->view('admin/karyawan/index', $data);
		$this->view('admin/templates/footer');
	}

	public function simpan_karyawan()
	{

		if ($this->model('m_karyawan')->tambahKaryawan($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		}
	}
	public function update_karyawan()
	{
		if ($this->model('m_karyawan')->updateDataKaryawan($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		}
	}

	public function hapus_karyawan($id)
	{
		if ($this->model('m_karyawan')->deleteKaryawan($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/karyawan');
			exit;
		}
	}

	public function getChangeKar()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_karyawan')->getAllKaryawanById($id));
	}


	//kurir
	public function kurir()
	{
		$data['title'] = 'Data Kurir';
		$data['kur'] = $this->model('m_kurir')->getKurir();
		$this->view('admin/templates/header', $data);
		$this->view('admin/kurir/index', $data);
		$this->view('admin/templates/footer');
	}
	public function tambah_kurir()
	{
		$data['title'] = 'Tambah Data Kurir';
		$this->view('admin/templates/header', $data);
		$this->view('admin/kurir/tambah');
		$this->view('admin/templates/footer');
	}
	public function simpan_kurir()
	{

		if ($this->model('m_kurir')->tambahKurir($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		}
	}
	public function cariKur()
	{
		$data['title'] = 'Data Kurir';
		$data['kur'] = $this->model('m_kurir')->getCatiKurir();
		$this->view('admin/templates/header', $data);
		$this->view('admin/kurir/index', $data);
		$this->view('admin/templates/footer');
	}


	public function edit_kurir($id)
	{

		$data['title'] = 'Edit Data kurir';
		$data['kur'] = $this->model('m_kurir')->getAllKurirById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/kurir/edit', $data);
		$this->view('admin/templates/footer');
	}



	public function update_kurir()
	{
		if ($this->model('m_kurir')->updateDataKurir($_POST) > 0) {
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		}
	}

	public function hapus_kurir($id)
	{
		if ($this->model('m_kurir')->deleteKurir($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/kurir');
			exit;
		}
	}


	public function getDataChangekurir()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_kurir')->getAllKurirById($id));
	}
	//produk
	public function produk()
	{
		$data['title'] = 'Data produk';
		$data['produk'] = $this->model('m_produk')->getProduk();
		$this->view('admin/templates/header', $data);
		$this->view('admin/produk/index', $data);
		$this->view('admin/templates/footer');
	}
	public function cariProduk()
	{
		$data['title'] = 'Data produk';
		$data['produk'] = $this->model('m_produk')->getCariProduk();
		$this->view('admin/templates/header', $data);
		$this->view('admin/produk/index', $data);
		$this->view('admin/templates/footer');
	}


	public function tambah_produk()
	{
		$data['title'] = 'Tambah produk';
		$this->view('admin/templates/header', $data);
		$this->view('admin/produk/tambah');
		$this->view('admin/templates/footer');
	}


	public function simpanproduk()
	{

		$test = array($_POST,$_FILES["gambar"]);
		
		if ($this->model('m_produk')->tambahdProduk($test) > 0 ) {

			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		}
	}
	public function edit_produk($id)
	{

		$data['title'] = 'Edit Data  produk ';
		$data['produk'] = $this->model('m_produk')->getAllProdukById($id);
		$this->view('admin/templates/header', $data);
		$this->view('admin/produk/edit', $data);
		$this->view('admin/templates/footer');
	}



	public function update_produk()
	{
		$test = array($_POST,$_FILES["gambar"]);

		// print_r($test);
		// die();
		
		if ($this->model('m_produk')->updateDataProduk($test) > 0 ) {

			Flasher::setMessage('Berhasil', 'di Update', 'success');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'di Update', 'danger');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		}
		
	}

	public function hapus_produk($id)
	{
		if ($this->model('m_produk')->deleteProduk($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/produk');
			exit;
		}
	}


	public function getDataChangeProduk()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_produk')->getAllProdukById($id));
	}

	//kategori sampah
	public function vimi()
	{
		$data['title'] = 'Data Visi Dan Misi';
		$data['visi'] = $this->model('m_vimi')->getVisi();
		$data['misi'] = $this->model('m_vimi')->getMisi();
		$this->view('admin/templates/header', $data);
		$this->view('admin/vimi/index', $data);
		$this->view('admin/templates/footer');
	}

	
	public function simpanvisi()
	{

		
		if ($this->model('m_vimi')->tambahVisi($_POST) > 0 ) {

			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
	}

	public function simpanmisi()
	{

		
		if ($this->model('m_vimi')->tambahMisi($_POST) > 0 ) {

			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
	}
		public function hapus_visi($id)
	{
		if ($this->model('m_vimi')->deleteVisi($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
	}
		public function hapus_misi($id)
	{
		if ($this->model('m_vimi')->deleteMisi($id) > 0) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
	}

	public function update_visi()
	{
		
		
		if ($this->model('m_vimi')->updateDataVisi($_POST) > 0 ) {

			Flasher::setMessage('Berhasil', 'di Update', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'di Update', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
		
	}
	public function update_misi()
	{
		
		
		if ($this->model('m_vimi')->updateDataMisi($_POST) > 0 ) {

			Flasher::setMessage('Berhasil', 'di Update', 'success');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		} else {
			Flasher::setMessage('Gagal', 'di Update', 'danger');
			header('location: ' . BASEURL . '/Admin/vimi');
			exit;
		}
		
	}

	public function getDataChangeVisi()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_vimi')->getAllVisiById($id));
	}
	public function getDataChangeMisi()
	{

		$id = $_POST['id'];

		echo json_encode($this->model('m_vimi')->getAllMisiById($id));
	}

}