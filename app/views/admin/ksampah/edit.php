<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_kat_sampah" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="hidden"  name="id" id="id" placeholder="ID" value="<?= $data['kat']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama" for="nama" id="nama" value="<?= $data['kat']['nama']; ?>">
	
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/kat_sampah" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>