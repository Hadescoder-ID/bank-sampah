<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Kurir/simpankurir" method="POST" enctype="multipart/form-data">
		
		<input class="form-control form-control-lg mt-2" type="text" name="nama_kurir" placeholder="nama_kurir">
		<input class="form-control form-control-lg mt-2" type="text" name="no_ktp" placeholder="no_ktp">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/kurir" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>