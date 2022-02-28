<div class="container mt-3">
	<div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary btnTambahDataJns" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
				Tambah Jenis Sampah
			</button>
			<h1>Data Jenis Sampah</h1>
			<table class="table table-stripped">
				<thead>
					<tr>
						<th scope="col">Kategori</th>
                        <th scope="col">Jenis Sampah</th>
                        <th scope="col">Jumlah Sampah</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">harga Beli</th>
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['jns_smp'] as $mhs) :?>
						<tr>
							<td><?= $mhs['kategori'];?></td>
                            <td><?= $mhs['jenis_sampah'];?></td>
                            <td><?= $mhs['jumlah_sampah'];?></td>
                            <td><?= $mhs['harga_jual'];?></td>
                            <td><?= $mhs['harga_beli'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/Jenis_Sampah/edit/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/Jenis_Sampah/hapus/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Sampah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Jenis_Sampah/simpansampah" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
            <div class="form-group">
	        	<label for="kat">Kategori</label>
	        	<select name="kat" id="kat" class="form-control" required="true">
	        		<option>-- Pilih Kategori--</option>
	        		<option value="Teknik Informatika">Teknik Informatika</option>
	        		<option value="Teknik Elektro">Teknik Elektro</option>
	        		<option value="Teknik Mesin">Teknik Mesin</option>
	        		<option value="Teknik Industri">Teknik Industri</option>
	        	</select>
	        </div>
			<div class="form-group">
	        	<label for="jenis">Jenis Sampah</label>
	        	<input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukkan Jenis Sampah" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="jumlah">Jumlah Sampah</label>
	        	<input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah Sampah" required="true">
	        </div>
            <div class="form-group">
	        	<label for="jual">Harga Jual</label>
	        	<input type="text" name="jual" id="jual" class="form-control" placeholder="Masukkan Harga Jual" required="true">
	        </div>
            <div class="form-group">
	        	<label for="beli">Harga Beli</label>
	        	<input type="text" name="beli" id="beli" class="form-control" placeholder="Masukkan Harga Beli" required="true">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div>