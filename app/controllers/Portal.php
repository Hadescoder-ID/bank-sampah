<?php

/*class Portal extends Controller {

	public function portal()
	{
		$data['title'] = 'Home Bank Sampah';
		$data['portal'] = $this->model('m_portal')->getPortal();

		$this->view('admin/templates/header', $data);
		$this->view('admin/portal/index', $data);
		$this->view('admin/templates/footer');

	}public function detail($id){
        $data['title'] = 'Detail Portal';
        $data['portal'] = $this->model('m_portal')->getAllPortalbyId($id);
        $this->view('admin/templates/header_', $data);
        $this->view('admin/portal/detail', $data);
        $this->view('admin/templates/footer');

	}public function hapus($id){
		if( $this->model('m_portal')->deletePortal($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location:'.BASEURL.'/Portal/portal');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location:'.BASEURL.'/Portal/portal');
			exit;	
		}
	}

}
	*/
	