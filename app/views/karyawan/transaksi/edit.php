<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Transaksi/update_transaksi" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="hidden" readonly="true" name="id" placeholder="ID" value="<?= $data['trx']['id']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="kur" id="kur" placeholder="kur" value="<?= $data['trx']['kur']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="kat" id="kat" placeholder="kat" value="<?= $data['trx']['kat']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="jns_smp" id="jns_smp" placeholder="jns_smp" value="<?= $data['trx']['jns_smp']; ?>">
        <input class="form-control form-control-lg mt-2" type="text" name="berat" id="berat" placeholder="berat" value="<?= $data['trx']['berat']; ?>">
     
        <input class="form-control form-control-lg mt-2" type="text" name="total" id="total" placeholder="total" value="<?= $data['trx']['total']; ?>">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?> " class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>