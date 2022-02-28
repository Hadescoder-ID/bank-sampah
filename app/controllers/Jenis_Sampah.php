<?php

class Jenis_Sampah extends Controller {
    public function index(){
        $data['title'] = 'Data Jenis Sampah';
        $data['jns_smp'] = $this->model('jns_sampah')->getAllJnSampah();
        $this->view('templates/header', $data);
        $this->view('jnsampah/index', $data);
        $this->view('templates/footer');
	}
	
	public function edit($id){

		$data['title'] = 'Edit Data jenis';
		$data['mhs'] = $this->model('jns_sampah')->getAllJnSampahById($id);
		$this->view('templates/header', $data);
		$this->view('Jenis_Sampah/edit', $data);
		$this->view('templates/footer');
	}

    public function tambah(){
		$data['title'] = 'Tambah Jenis Sampah';		
		$this->view('templates/header', $data);
		$this->view('Jenis_Sampah/tambah');
		$this->view('templates/footer');
    }
    
    public function simpansampah(){		

		if( $this->model('jns_sampah')->tambahJnSampah($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;	
		}
	}
	
	public function updateJenis(){	
		if( $this->model('jns_sampah')->updateDataJenis($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;	
		}
	}
    
    public function hapus($id){
		if( $this->model('jns_sampah')->deleteJns($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/Jenis_Sampah/index');
			exit;	
		}
	}

	public function getDataChange(){

		$id = $_POST['id'];

		echo json_encode($this->model('jns_sampah')->getAllJnSampahById($id));
	}


}

?>