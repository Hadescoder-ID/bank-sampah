<?php

class m_portal{
    private $table = 'tb_portal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

	public function getPortal()
	{
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
	}
	 public function getAllPortalbyId($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	 public function tambahdPortal($data)
	{
		//$kat, $jenis, $jumlah, $jual, $beli
		$query = "INSERT INTO tb_portal (judul,isi,tgl,gambar) VALUES(:judul, :isi,now(), :gambar)";
		
        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = 'berita-' . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, $_SERVER["DOCUMENT_ROOT"] . "/banksampah/public/img/portal/" . $gambar);


		
		$this->db->query($query);
		$this->db->bind('judul',$data[0]['judul']);
		$this->db->bind('isi',$data[0]['isi']);
		$this->db->bind('gambar',$gambar);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
	public function deletePortal($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
    public function updateDataPortal($data)
	{

        $cek = $_FILES['gambar']['name'];
        // print_r($gambar);
        // die();

        if($cek == ''){

		$query = "UPDATE tb_portal SET judul=:judul, isi=:isi,tgl=:now() WHERE id=:id";
		$this->db->query($query);
		
		$this->db->bind('judul',$data[0]['judul']);
		$this->db->bind('isi',$data[0]['isi']);
		//$this->db->bind('gambar',$gambar);
		$this->db->bind('id',$data[0]['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}else{

		$query = "UPDATE tb_portal SET judul=:judul, isi=:isi,tgl=:now(), gambar=:gambar WHERE id=:id";
		 unlink($_SERVER["DOCUMENT_ROOT"]."/banksampah/public/img/portal/".$data[0]['gambarold']);
        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = 'berita-' . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, $_SERVER["DOCUMENT_ROOT"] . "/banksampah/public/img/portal/" . $gambar);
		$this->db->query($query);
		
		$this->db->bind('judul',$data[0]['judul']);
		$this->db->bind('isi',$data[0]['isi']);
		$this->db->bind('gambar',$gambar);
		$this->db->bind('id',$data[0]['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
}
 public function getcariberita()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tb_portal WHERE judul LIKE :keyword AND isi like :keyword ";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

	

}
