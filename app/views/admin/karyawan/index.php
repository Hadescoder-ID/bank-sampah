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

			<h1>Daftar Karyawan</h1>
			<br>
			<br>

			<div class="container">
			  <div class="row">
			    <div class="col-sm">
			<button type="button" class="btn btn-primary btnTambahDataKar" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
			      
				Tambah Karyawan
			</button>
			    </div>
			
			    <div class="col-sm">
			    	<form action="<?= BASEURL; ?>/Admin/cariKar" method="post">
			    		<div class="input-group mb-3">
		  				<input type="text" class="form-control" autocomplete="off" placeholder="masukkan nama  karyawan . . ." name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
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
						<th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">password</th>
                        <th scope="col">level</th>
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['karyawan'] as $dt) :?>
						<tr>
							<td><?= $dt['nama_lengkap'];?></td>
                            <td><?= $dt['username'];?></td>
                            <td><?= $dt['password'];?></td>
                            <td><?= $dt['level'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/Admin/update_karyawan/<?= $dt['id'] ?>" class="badge badge-primary badge-pill tampilModalUbahkar" data-toggle="modal" data-target="#exampleModal" data-id="<?= $dt['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/Admin/hapus_karyawan/<?= $dt['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpan_karyawan" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
            
			<div class="form-group">
	        	<label for="nama">Nama karyawan</label>
	        	<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="username">Username</label>
	        	<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Jusername" required="true">
	        </div>
            <div class="form-group">
	        	<label for="password">password</label>
	        	<input type="text" name="password" id="password" class="form-control" placeholder="Masukkan password" required="true">
	        </div>
           <div class="form-group">
	        	<label for="level">Level</label>
	        	<select name="level" id="level" class="form-control" required="true">
	        		<option>-- Pilih Level--</option>
	        		<option value="Admin">Admin</option>
	        		<option value="Teller">Teller</option>
	        	</select>
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