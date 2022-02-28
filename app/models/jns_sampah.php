<?php

class jns_sampah{
    private $table = 'tb_jenis_sampah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJnSampah()
    {
        $this->db->query('SELECT tb_kat_sampah.nama_kategori,tb_jenis_sampah.* FROM tb_jenis_sampah,tb_kat_sampah WHERE tb_kat_sampah.id= tb_jenis_sampah.kategori');
        return $this->db->resultSet();
    }

    public function getAllJnSampahById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function tambahJnSampah($data)
	{
		//$kat, $jenis, $jumlah, $jual, $beli
		$query = "INSERT INTO tb_jenis_sampah (kategori, jenis_sampah, berat_sampah, harga_beli) VALUES(:kat, :jenis, :berat ,:beli)";
		
		$this->db->query($query);
		$this->db->bind('kat',$data['kat']);
		$this->db->bind('jenis',$data['jenis']);
        $this->db->bind('berat',$data['berat']);
        $this->db->bind('beli',$data['beli']);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
	public function deleteJns($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
    public function updateDataJenis($data)
	{
		$query = "UPDATE tb_jenis_sampah SET kategori=:kat, jenis_sampah=:jenis, berat_sampah=:berat, harga_beli=:beli WHERE id=:id";
		$this->db->query($query);

		$this->db->bind('kat',$data['kat']);
		$this->db->bind('jenis',$data['jenis']);
        $this->db->bind('berat',$data['berat']);
        $this->db->bind('beli',$data['beli']);
		$this->db->bind('id',$data['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
	 public function getcariJns(){
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM tb_jenis_sampah WHERE jenis_sampah LIKE :keyword";
    	$this->db->query($query);
    	$this->db->bind('keyword',"%$keyword%");
    	return $this->db->resultSet();

    }


}

?>