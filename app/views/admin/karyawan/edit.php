<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_karyawan" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['kar']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="nama lengkap" value="<?= $data['kar']['nama']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="username" placeholder="username" value="<?= $data['kar']['username']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="password" placeholder="password" value="<?= $data['kar']['password']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="level" placeholder="level" value="<?= $data['kar']['level']; ?>">
       
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/karyawan" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>