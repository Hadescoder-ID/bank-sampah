 <div class="container mt-3">
     <div class="row">
         <div class="col-sm-12">
             <?php
                Flasher::Message();
                ?>
         </div>
     </div>
      <div class="col-sm">
                        <button type="button" class="btn btn-primary btnTambahDatavisi" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
							Tambah Visi
						</button>
			
                     </div>
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col">
					<table class="table table-stripped">
			
			  <thead >
			    <tr align="center">
			      <th scope="col">No</th>
			      <th scope="col">Visi</th>
			      

			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	<?php
			  		$no=1; 
			  		foreach ($data['visi'] as $visi): ?>
				    <tr>
				    	<td><?= $no++;?></td>
				    	<td><?= $visi['visi'];?></td>
				      <td>
				      	<!--<a href="<?= BASEURL; ?>/Admin/detail/<?= $portal['id']; ?>" class="badge badge-primary badge-pill" >Detail</a>-->
				      	<a href="<?= BASEURL; ?>/Admin/update_visi/<?= $visi['id'] ?>" class="badge badge-success badge-pill tampilModalUbahvisi" data-toggle="modal" data-target="#exampleModal" data-id="<?= $visi['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
						<a href="<?= BASEURL; ?>/Admin/hapus_visi/<?= $visi['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
				      </td>
				    </tr>
			    <?php endforeach; ?>	
			</tbody>
			</table>
			</div>
				</div>
				<button type="button" class="btn btn-primary btnTambahDatamisi" data-toggle="modal" data-target="#exampleModal1" data-zurl="<?= BASEURL; ?>">
							Tambah Misi
						</button>
				<div class="col">
					<table class="table table-stripped">
			
			  <thead >
			    <tr align="center">
			      <th scope="col">No</th>
			      <th col="col">Misi</th>

			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	<?php
			  		$no=1;
			  			foreach ($data['misi'] as $misi): ?>
				    <tr>
				    	<td><?= $no++;?></td>
				    	<td><?= $misi['misi'];?></td>
				      <td>
				      	<!--<a href="<?= BASEURL; ?>/Admin/detail/<?= $portal['id']; ?>" class="badge badge-primary badge-pill" >Detail</a>-->
				      	<a href="<?= BASEURL; ?>/Admin/update_misi/<?= $misi['id'] ?>" class="badge badge-success badge-pill tampilModalUbahmisi" data-toggle="modal" data-target="#exampleModal1" data-id="<?= $misi['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
						<a href="<?= BASEURL; ?>/Admin/hapus_misi/<?= $misi['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
				      </td>
				    </tr>
			    <?php endforeach; ?>	
			</tbody>
			</table>
			</div>
				</div>
			</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Visi </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpanvisi" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
        
			<div class="form-group">
	        	<label for="visi">Visi</label>
	        	<input type="text" name="visi" id="visi" class="form-control" placeholder="" required="true">
	        </div>
	        
	      
	        <!--<div class="form-group">
	        	<label for="gambar">Masukkan Gambar :</label>
    			<input type="file" class="form-control-file" id="gambar">
	        </div>-->

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Misi </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpanmisi" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
        
	        <div class="form-group">
	        	<label for="misi">Misi</label>
	        	<input type="text" name="misi" id="misi" class="form-control" placeholder="" required="true">
	        </div>
	        <!--<div class="form-group">
	        	<label for="gambar">Masukkan Gambar :</label>
    			<input type="file" class="form-control-file" id="gambar">
	        </div>-->

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div>
</div>

