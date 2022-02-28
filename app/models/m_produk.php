<?php

class m_produk
{
    private $table = 'tb_produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProduk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getCariProduk()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tb_produk WHERE nama_produk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getAllProdukById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahdProduk($data)
    {
        
        //$kat, $jenis, $jumlah, $jual, $beli
        $query = "INSERT INTO tb_produk (nama_produk, harga_produk, bahan, gambar) VALUES(:nama_produk,:harga_produk,:bahan,:gambar)";

        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = 'produk-' . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, $_SERVER["DOCUMENT_ROOT"] . "/banksampah/public/img/produk/" . $gambar);

        
        $this->db->query($query);
        $this->db->bind('nama_produk', $data[0]['nama_produk']);
        $this->db->bind('harga_produk', $data[0]['harga_produk']);
        $this->db->bind('bahan', $data[0]['bahan']);
        $this->db->bind('gambar', $gambar);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduk($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataProduk($data)
    {
        
        
        
        $cek = $_FILES['gambar']['name'];
        // print_r($gambar);
        // die();

        if($cek == ''){
            $query = "UPDATE tb_produk SET nama_produk=:nama_produk, harga_produk=:harga_produk, bahan=:bahan WHERE id=:id";
        
            $this->db->query($query);
            $this->db->bind('nama_produk', $data[0]['nama_produk']);
            $this->db->bind('harga_produk', $data[0]['harga_produk']);
            $this->db->bind('bahan', $data[0]['bahan']);
            //$this->db->bind('gambar', $gambar);
            $this->db->bind('id', $data[0]['id']);
            $this->db->execute();

            return $this->db->rowCount();


        }else{
            $query = "UPDATE tb_produk SET nama_produk=:nama_produk, harga_produk=:harga_produk, bahan=:bahan, gambar=:gambar WHERE id=:id";
        unlink($_SERVER["DOCUMENT_ROOT"]."/banksampah/public/img/produk/".$data[0]['gambarold']);
        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = 'produk-' . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, $_SERVER["DOCUMENT_ROOT"] . "/banksampah/public/img/produk/" . $gambar);
            // echo "<pre>";
            // print_r($data);
            // die();
            // $query = "UPDATE tb_produk SET nama_produk='".$data[0]['nama_produk']."', harga_produk=".$data[0]['harga_produk'].", bahan='".$data[0]['bahan']."', gambar='".$gambar."' WHERE id=".$data[0]['id']."";
        // $this->db->query($query);
        
        // $this->db->bind('nama',$data['nama']);
        // $this->db->bind('id',$data['id']);
        // $this->db->execute();
            // UPDATE tb_produk SET nama_produk=:nama_produk, harga_produk=:harga_produk, bahan=:bahan, gambar=:gambar WHERE id=:id
        
            // $gbr_awal = $this->getAllProdukById($id)->fetch_object()->gambar;
            
            // $upload = move_uploaded_file($sumber, "banksampah/public/img/produk/".$gambar);
            $this->db->query($query);
            $this->db->bind('nama_produk', $data[0]['nama_produk']);
            $this->db->bind('harga_produk', $data[0]['harga_produk']);
            $this->db->bind('bahan', $data[0]['bahan']);
            $this->db->bind('gambar', $gambar);
            $this->db->bind('id', $data[0]['id']);
            $this->db->execute();

            return $this->db->rowCount();

            // print_r($this->db->rowCount());
            // die();        
        }
        
    }
}