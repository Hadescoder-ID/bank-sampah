<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_portal" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['portal']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="Judul" placeholder="Judul" value="<?= $data['portal']['Judul']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="isi" placeholder="isi" value="<?= $data['portal']['isi']; ?>">
     
       
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/portal" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>