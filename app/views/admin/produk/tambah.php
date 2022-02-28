<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/simpanproduk" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" name="nama_produk" placeholder="nama_produk">
		<input class="form-control form-control-lg mt-2" type="text" name="harga_produk" placeholder="harga_produk">
		<input class="form-control form-control-lg mt-2" type="text" name="bahan" placeholder="bahan">
		<input class="form-control form-control-lg mt-2" type="text" name="gambar" id="gambar" placeholder="gambar">
		
	<?php 
	$extensi = explode(".", $_FILES['gambar']['name']);
								$gambar = 'produk-'.round(microtime(true)).".".end($extensi);
								$sumber = $_FILES['gambar']['tmp_name'];
								$upload = move_uploaded_file($sumber,BASEURL."/img/produk/".$gambar);
								$gambar = $upload;

		
								?>
		<a href="<?= BASEURL; ?>/Admin/produk" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>