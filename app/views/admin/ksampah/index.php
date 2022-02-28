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

			<h1>Data Kategori Sampah</h1>
			<br>
			<br>

			<div class="container">
			  <div class="row">
			    <div class="col-sm">
			      <button type="button" class="btn btn-primary btnTambahDataKat" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
				Tambah Kategori Sampah
			</button>
			    </div>
			
			    <div class="col-sm">
			    	<form action="<?= BASEURL; ?>/Admin/cariKat" method="post">
			    		<div class="input-group mb-3">
		  				<input type="text" class="form-control" autocomplete="off" placeholder="masukkan nama  kategori . . ." name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
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
                        <th scope="col">Kategori Sampah</th>
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($data['k_smp'] as $kat) :?>
						<tr>
							<td><?= $no++;?></td>
							<td><?= $kat['nama_kategori'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/Admin/update_kat_sampah/<?= $kat['id'] ?>" class="badge badge-primary badge-pill tampilModalUbahkat" data-toggle="modal" data-target="#exampleModal" data-id="<?= $kat['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/Admin/hapus_kat_sampah/<?= $kat['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah kategori Sampah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpankatsampah" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
        
			<div class="form-group">
	        	<label for="nama">kategori Sampah</label>
	        	<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Kategori Sampah" required="true">
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
