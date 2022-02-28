<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/simpankatsampah" method="POST" enctype="multipart/form-data">
		
		<input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="Kategori Sampah">
		
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/kat_sampah" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>