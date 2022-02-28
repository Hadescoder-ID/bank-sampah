<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/simpan_jenis_sampah" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" name="kat" placeholder="Kategori">
		<input class="form-control form-control-lg mt-2" type="text" name="jenis" placeholder="Jenis Sampah">
		<input class="form-control form-control-lg mt-2" type="text" name="berat" placeholder="Jumlah Sampah">
        <input class="form-control form-control-lg mt-2" type="text" name="beli" placeholder="Harga Beli">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/jenis_sampah" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>