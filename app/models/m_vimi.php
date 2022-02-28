<?php

class m_vimi{
    private $table1 = 'tb_visi';
    private $table2 = 'tb_misi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getVisi()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        return $this->db->resultSet();
    }
    public function getMisi()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        return $this->db->resultSet();
    }
    public function getCarikSampah(){
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM tb_kat_sampah WHERE nama_kategori LIKE :keyword";
    	$this->db->query($query);
    	$this->db->bind('keyword',"%$keyword%");
    	return $this->db->resultSet();

    }


    public function getAllVisiById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	   public function getAllMisiById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table2 . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function tambahVisi($data)
	{
		$query = "INSERT INTO tb_visi (visi) VALUES(:visi)";
		
		
		$this->db->query($query);
		$this->db->bind('visi',$data['visi']);
		$this->db->execute();

		return $this->db->rowCount();
    }
     public function tambahMisi($data)
	{
		$query = "INSERT INTO tb_misi (misi) VALUES(:misi)";
		
		
		$this->db->query($query);
		$this->db->bind('misi',$data['misi']);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
	public function deleteVisi($id)
	{
		$this->db->query('DELETE FROM ' . $this->table1 . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    public function deleteMisi($id)
	{
		$this->db->query('DELETE FROM ' . $this->table2 . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
    }
    
    
    public function updateDataVisi($data)
	{
		$query = "UPDATE tb_visi SET visi=:visi WHERE id=:id";
		$this->db->query($query);
		
		$this->db->bind('visi',$data['visi']);
		$this->db->bind('id',$data['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function updateDataMisi($data)
	{
		$query = "UPDATE tb_misi SET misi=:misi WHERE id=:id";
		$this->db->query($query);
		
		$this->db->bind('misi',$data['misi']);
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