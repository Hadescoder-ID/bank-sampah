<?php

class m_kurir{
    private $table = 'tb_kurir';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKurir()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    public function getCatiKurir(){
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM tb_kurir WHERE nama_kurir LIKE :keyword";
    	$this->db->query($query);
    	$this->db->bind('keyword',"%$keyword%");
    	return $this->db->resultSet();

    }


    public function getAllKurirById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	public function tambahKurir($data)
	{

		$query = "INSERT INTO tb_kurir (nama_kurir,no_ktp) VALUES(:nama_kurir, :no_ktp )";
		
		$this->db->query($query);
		$this->db->bind('nama_kurir',$data['nama_kurir']);
		$this->db->bind('no_ktp',$data['no_ktp']);
		$this->db->execute();

		return $this->db->rowCount();
    }

    
	public function deleteKurir($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
    public function updateDataKurir($data)
	{
		$query = "UPDATE tb_kurir SET nama_kurir=:nama_kurir, no_ktp=:no_ktp WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('nama_kurir',$data['nama_kurir']);
		$this->db->bind('no_ktp',$data['no_ktp']);
      	$this->db->bind('id',$data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

}

?>