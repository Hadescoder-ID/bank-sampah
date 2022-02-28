 <div class="container mt-3">
     <div class="row">
         <div class="col-sm-12">
             <?php
                Flasher::Message();
                ?>
         </div>
     </div>

  <div class="container">
  	<h1>Data Berita </h1>
                 <div class="row">
                 	
                 	<br>
                     <div class="col-sm">
                        <button type="button" class="btn btn-primary btnTambahDataPortal" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
							Tambah Berita
						</button>
			
                     </div>

                     <div class="col-sm">
                         <form action="<?= BASEURL; ?>/Admin/cariberita" method="post">
                             <div class="input-group mb-3">
                                 <input type="text" class="form-control" autocomplete="off" placeholder="masukkan judul berita atau isi berita" name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                                 </div>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>

	<div class="row">
		<div class="col-sm-12">
			
			<table class="table table-stripped">
			
			  <thead >
			    <tr align="center">
			      <th scope="col">No</th>
			      <th scope="col">Judul</th>
			      <th scope="col">Isi</th>
			      <th scope="col">Tanggal dibuat</th>
			      <!--<th scope="col">Gambar</th>-->
			      
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$no=1; 
			  		foreach ($data['portal'] as $portal): ?>
				    <tr>
				      <td><?= $no++;?></td>
				      <td><?= $portal['judul'];?></td>
				      <td><?= substr($portal['isi'], 0,10);?></td>
				      <td><?= date_format(date_create($trx['tgl']),'d/m/Y H:i:s'); ?></td>
				      <td><img src="<?= BASEURL; ?>/img/portal/<?= $portal['gambar']; ?>" width="70px"></td>
 
				      
				      <td>
				      	<!--<a href="<?= BASEURL; ?>/Admin/detail/<?= $portal['id']; ?>" class="badge badge-primary badge-pill" >Detail</a>-->
				      	<a href="<?= BASEURL; ?>/Admin/update_portal/<?= $portal['id'] ?>" class="badge badge-success badge-pill tampilModalUbahPortal" data-toggle="modal" data-target="#exampleModal" data-id="<?= $portal['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
						<a href="<?= BASEURL; ?>/Admin/hapus_portal/<?= $portal['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Portal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/Admin/simpanportal" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
        
			<div class="form-group">
	        	<label for="judul">Judul</label>
	        	<input type="text" name="judul" id="judul" class="form-control" placeholder="" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="isi">Isi Berita</label>
    		<textarea class="form-control" name="isi" id="isi" rows="3"></textarea>
	        </div>
	        <div class="form-group">
                             <label for="gambar">Masukkan Gambar :</label>
                             <img src="" id="imgview" width="40px" height="40px">
                             <input type="file" name="gambar" class="form-control" id="gambar">

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
