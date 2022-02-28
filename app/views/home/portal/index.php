 <div class="container mt-3">
	
<h5 class="mt-0">Daftar berita</h5>


			<?php foreach ($data['portal'] as $portal): ?>

<div class="media">

  <img src="<?= BASEURL; ?>/img/portal/<?= $portal['gambar']; ?>" class="mr-2" style="width:300px; height:300px; " alt="...">
  <div class="media-body">
    

   <ul class="list-group">
				<li class="list-group-item"><?= $portal['judul'];?></li>
				<li class="list-group-item"><?= substr($portal['isi'],0,50);?></li>
				<li class="list-group-item"><a href="<?= BASEURL; ?>/Home/detail/<?= $portal['id']; ?>">Baca Selengkapnya</a></li>
				<li class="list-group-item">Diposkan pada <?= $portal['tgl'];?></li>
</ul>
				 </div>
</div>
			<?php endforeach ?>				
			
			
 
</div>