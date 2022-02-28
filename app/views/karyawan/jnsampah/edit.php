<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Jenis_Sampah/updateJenis" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="id" placeholder="ID" value="<?= $data['mhs']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="kat" placeholder="Kategori" value="<?= $data['mhs']['kat']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="jenis" placeholder="jenis" value="<?= $data['mhs']['jenis']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="jumlah" placeholder="jumlah" value="<?= $data['mhs']['jumlah']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="jual" placeholder="jual" value="<?= $data['mhs']['jual']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="beli" placeholder="beli" value="<?= $data['mhs']['beli']; ?>">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/Jenis_Sampah" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>