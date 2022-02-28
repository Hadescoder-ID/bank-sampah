<?php

class kat_sampah{
    private $table = 'tb_kat_sampah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllkSampah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getCarikSampah(){
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM tb_kat_sampah WHERE nama_kategori LIKE :keyword";
    	$this->db->query($query);
    	$this->db->bind('keyword',"%$keyword%");
    	return $this->db->resultSet();

    }

    public function getAllkSampahById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function tambahkSampah($data)
	{
		//$kat, $jenis, $jumlah, $jual, $beli
		$query = "INSERT INTO tb_kat_sampah (nama_kategori) VALUES(:nama)";
		
		
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
	public function deleteK($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
    public function updateDataKat($data)
	{
		$query = "UPDATE tb_kat_sampah SET nama_kategori=:nama WHERE id=:id";
		$this->db->query($query);
		
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('id',$data['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function pagination(){

		$query = "SELECT * FROM ".$this->table." WHERE id LIMIT 5 ";
		$this->db->query($query);
		
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('id',$data['id']);
		$this->db->execute();

		return $this->db->rowCount();	
	}

}

?>