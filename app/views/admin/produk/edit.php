<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_produk" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['produk']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama_produk" placeholder="nama_produk" value="<?= $data['produk']['nama_produk']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="harga_produk" placeholder="harga_produk" value="<?= $data['produk']['harga_produk']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="bahan" placeholder="bahan" value="<?= $data['produk']['bahan']; ?>">  
		<input class="form-control form-control-lg mt-2" type="text" name="gambar" placeholder="gambar" value="<?= $data['produk']['gambar']; ?>">
		
       
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/produk" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>