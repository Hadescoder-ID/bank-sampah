<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/update_jenis_sampah" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['mhs']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="kat" placeholder="Kategori" value="<?= $data['mhs']['kat']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="berat" placeholder="berat" value="<?= $data['mhs']['berat']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="jumlah" placeholder="jumlah" value="<?= $data['mhs']['jumlah']; ?>">
       
        <input class="form-control form-control-lg mt-2" type="text" name="beli" placeholder="beli" value="<?= $data['mhs']['beli']; ?>">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Admin/jenis_sampah" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>