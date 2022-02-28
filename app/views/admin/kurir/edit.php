<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_kurir" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['kurir']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama_kurir" placeholder="nama_kurir" value="<?= $data['kurir']['nama_kurir']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="no_ktp" placeholder="no_ktp" value="<?= $data['kurir']['no_ktp']; ?>">
      
 
       
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/kurir" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>