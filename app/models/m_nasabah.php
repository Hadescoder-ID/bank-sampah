<?php

class m_nasabah{
    private $table = 'tb_nasabah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNsb()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }public function getAllNasabah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllNasabahById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahNasabah($data)
    {
        
        $query = "INSERT INTO tb_nasabah (nama, alamat, no_ktp , no, saldo) VALUES(:nama, :alamat,:no_ktp, :no, :saldo)";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('alamat',$data['alamat']);
         $this->db->bind('no_ktp',$data['no_ktp']);
        $this->db->bind('no',$data['no']);
        $this->db->bind('saldo',$data['saldo']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function deleteNasabah($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function updateData($data)
    {
        $query = "UPDATE tb_nasabah SET nama=:nama, alamat=:alamat, jumlah_sampah=:jumlah, harga_jual=:jual, harga_beli=:beli WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('jumlah',$data['jumlah']);
        $this->db->bind('jual',$data['jual']);
        $this->db->bind('beli',$data['beli']);
        $this->db->execute();

        return $this->db->rowCount();
    }

}

?>
