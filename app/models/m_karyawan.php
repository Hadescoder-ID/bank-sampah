<?php

class m_karyawan{

    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllkar(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


   
    public function getAllKaryawanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function getcariKar(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM ".$this->table." WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();

    }
    public function tambahKaryawan($data)
    {
        //$kat, $jenis, $jumlah, $jual, $beli
        $query = "INSERT INTO tb_user (nama_lengkap,username,password,level) VALUES(:nama,:username,:password,:level)";
        
        
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',$data['password']);
        $this->db->bind('level',$data['level']);
        $this->db->execute(); 

        return $this->db->rowCount();
    }
    
    public function deleteKaryawan($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function updateDataKaryawan($data)
    {
        $query = "UPDATE tb_user SET nama_lengkap=:nama,username=:username,password=:password,level=:level WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('username',$data['username']);
        $this->db->bind('password',$data['password']);
        $this->db->bind('level',$data['level']);
        $this->db->execute();

        return $this->db->rowCount();
    }


}

?>