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
 		 			<h1>Data Transaksi </h1>
 

			<div class="container">
			  <div class="row">
			    <div class="col-sm">
			     	<button type="button" class="btn btn-primary btnTambahDataTrx" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
 				Tambah Transaksi
 					</button>

 					
 					<!--<a href="<?= BASEURL;?>/Admin/cetaktrx" target="_blank" class="badge badge-success badge-pill" >Cetak Data Transaksi</a>-->

						<form action="<?= BASEURL;?>/Admin/cetaktrx" method="post">
			    		<div class="input-group mb-3">
		  				<input type="date" class="form-control" autocomplete="off" name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
		  				<div class="input-group-append">
		   				 	<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
		  				</div>
					</div>
			    	</form>
			    </div>
			
			    <div class="col-sm">
			    	<form action="<?= BASEURL; ?>/Admin/cariTrx" method="post">
			    		<div class="input-group mb-3">
		  				<input type="text" class="form-control" autocomplete="off" placeholder="masukkan nama  kurir . . ." name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
		  				<div class="input-group-append">
		   				 	<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
		  				</div>
					</div>
			    	</form>
			  	
			    </div>
			  </div>
			</div>


			<table class="table table-stripped">
 				<thead>
 					<tr>

 						<th scope="col">No</th>
 						<th scope="col">Tanggal</th>
 						<th scope="col">Kategori</th>
 						<th scope="col">jenis sampah</th>
 						<th scope="col">kurir</th>
 						<th scope="col">Kg</th>
 						<th scope="col">Harga</th>
 						<th scope="col" width="200px">Action</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
						$no = 1;
						foreach ($data['trans'] as $trx) : ?>
 						<tr>
 							<td><?= $no++; ?></td>
 							<td><?= date_format(date_create($trx['tgl']),'d/m/Y H:i:s'); ?></td>
 							<td><?= $trx['nama_kategori']; ?></td>
 							<td><?= $trx['jenis_sampah']; ?></td>
 							<td><?= $trx['nama_kurir']; ?></td>
 							<td><?= $trx['berat']; ?></td>
 							<td><?= "Rp. ".number_format($trx['total'],0,".",".").",-"; ?></td>
 							
 							<td>
 								<a href="<?= BASEURL; ?>/Admin/update_transaksi/<?= $trx['id'] ?>" class="badge badge-primary badge-pill tampilModalUbahTrx" data-toggle="modal" data-target="#exampleModal" data-id="<?= $trx['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
 								<a href="<?= BASEURL; ?>/Admin/hapus_transaksi/<?= $trx['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
 							</td>
 						</tr>
 					<?php endforeach; ?>
 				</tbody>
 			</table>
 			<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-end">
					    <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#">Next</a>
					    </li>
					  </ul>
					</nav>	
 		</div>
 	</div>
 </div>

 <!-- Modal tambah -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form action="<?= BASEURL; ?> /Admin/tambah_transaksi" method="POST" enctype="multipart/form-data">
 					<input type="hidden" name="id" id="id">
 					<div class="form-group">
 					
 						<input type="hidden" name="tgl" id="tgl" class="form-control" required="true">
 					</div>

 					<div class="form-group">
 						<label for="kat">Kurir</label>

 						<select name="kur" id="kur" class="form-control" required="true">
 							<option>-- pilih kurir--</option>
 							<?php foreach ($data['kur'] as $kur) : ?>
 								<option value="<?= $kur['id']; ?>"><?= $kur['nama_kurir']; ?></option>
 							<?php endforeach; ?>
 						</select>


 					</div>
 					<!--<input type="hidden" name="id" id="id">-->
 					<div class="form-group">
 						<label for="kat">Kategori</label>

 						<select name="kat" id="kat" class="form-control" required="true">
 							<option>-- Kategori--</option>
 							<?php foreach ($data['kat'] as $kat) : ?>
 								<option value="<?= $kat['id']; ?>"><?= $kat['nama_kategori']; ?></option>
 							<?php endforeach; ?>
 						</select>
 					
 					</div>
 					<!--<input type="hidden" name="id" id="id">-->
 					<div class="form-group">
 						<label for="jns_smp">Jenis</label>

 						<select name="jns_smp" id="jns_smp" class="form-control" required="true">
 							<option>-- jenis--</option>
 							<?php foreach ($data['jns_smp'] as $jns_smp) : ?>
 								<option value="<?= $jns_smp['id']; ?>" data-harga="<?= $jns_smp['harga_beli'] ?>"><?= $jns_smp['jenis_sampah']; ?></option>
 							<?php endforeach; ?>
 						</select>
 					</div>
 					<div class="form-group">
 						<label for="berat">Berat/kg</label>
 						<input type="text" name="berat" id="berat" class="form-control" placeholder="Masukkan Berat sampah" required="true" onkeyup="hitung_total()">
 					</div>
 					<!--total = berat*harga_beli-->
 					<div class="form-group">
 						<label for="total">Total</label>
 						<input type="text" name="total" id="total" class="form-control" placeholder="Masukkan total" required="true">
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>