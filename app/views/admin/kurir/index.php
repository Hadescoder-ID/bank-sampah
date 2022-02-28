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

			<h1>Data Kurir</h1>
			<br>
			<br>

			<div class="container">
			  <div class="row">
			    <div class="col-sm">
					
			      <button type="button" class="btn btn-primary btnTambahDataKurir" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
				Tambah Kurir
			</button>			    </div>
			
			    <div class="col-sm">
			    	<form action="<?= BASEURL; ?>/Admin/cariKur" method="post">
			    		<div class="input-group mb-3">
		  				<input type="text" class="form-control" autocomplete="off" placeholder="masukkan nama  Kurir . . ." name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
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
                        <th scope="col">Nama kurir</th>
                        <th scope="col">No_ktp</th>
                        
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($data['kur'] as $kurir) :?>
						<tr>
							<td><?= $no++;?></td>
							<td><?= $kurir['nama_kurir'];?></td>
							<td><?= $kurir['no_ktp'];?></td>
							
							<td>
								<a href="<?= BASEURL; ?>/Admin/update_kurir<?= $kurir['id'] ?>" class="badge badge-primary badge-pill tampilModalUbahKur" data-toggle="modal" data-target="#exampleModal" data-id="<?= $kurir['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/Admin/hapus_kurir/<?= $kurir['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kurir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpan_kurir" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
        
			<div class="form-group">
	        	<label for="nama_kurir">Nama Kurir</label>
	        	<input type="text" name="nama_kurir" id="nama_kurir" class="form-control" placeholder="Masukkan nama_kurir" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="no_ktp">No_ktp</label>
	        	<input type="text" name="no_ktp" id="no_ktp" class="form-control" placeholder="Masukkan no_ktp" required="true">
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
