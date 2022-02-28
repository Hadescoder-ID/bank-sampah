<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Transaksi/simpan_transaksi" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" name="kurir" placeholder="">
		<input class="form-control form-control-lg mt-2" type="text" name="kat" placeholder="">
	
		<input class="form-control form-control-lg mt-2" type="text" name="jenis_sampah" placeholder="jenis_sampah">
        <input class="form-control form-control-lg mt-2" type="text" name="berat" placeholder="berat">
        <input class="form-control form-control-lg mt-2" type="text" name="total" placeholder="total">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>