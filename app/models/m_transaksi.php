<?php

class m_transaksi
{
	private $table = 'tb_transaksi';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTrx()
	{
		$this->db->query('SELECT tb_transaksi.id, tb_transaksi.tgl, tb_transaksi.berat, tb_transaksi.total, tb_kurir.nama_kurir, tb_kat_sampah.nama_kategori, tb_jenis_sampah.jenis_sampah 
		FROM tb_transaksi
		INNER JOIN tb_kurir ON tb_kurir.id = tb_transaksi.kurir
		INNER JOIN tb_kat_sampah ON tb_kat_sampah.id = tb_transaksi.kat
		INNER JOIN tb_jenis_sampah ON tb_jenis_sampah.id = tb_transaksi.jenis;');
		// $this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAllTrxById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahTrx($data)
	{
		//$kat, $jenis, $jumlah, $jual, $beli
		$query = "INSERT INTO tb_transaksi(tgl,kurir,kat,jenis,berat,total)VALUES(NOW(),:kurir, :kat, :jenis, :berat, :total)";

		$this->db->query($query);
		$this->db->bind('kurir', $data['kur']);
		$this->db->bind('kat', $data['kat']);
		$this->db->bind('jenis', $data['jns_smp']);
		$this->db->bind('berat', $data['berat']);
		$this->db->bind('total', $data['total']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataTrx($data)
	{
		$query = 'UPDATE tb_transaksi SET tgl=NOW(), kurir=:kurir, kat=:kat, jenis=:jenis, berat=:berat,  total=:total WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('kurir', $data['kur']);
		$this->db->bind('kat', $data['kat']);
		$this->db->bind('jenis', $data['jns_smp']);
		$this->db->bind('berat', $data['berat']);
		$this->db->bind('total', $data['total']);
		$this->db->bind('id', $data['id']);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function deleteTrx($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}
	public function getcariTrx(){
    	$keyword = $_POST['keyword'];
    	$query = "SELECT * FROM tb_transaksi WHERE kurir LIKE :keyword AND tgl LIKE :keyword AND jenis";
    	$this->db->query($query);
    	$this->db->bind('keyword',"%$keyword%");
    	return $this->db->resultSet();
    	
    }
}
