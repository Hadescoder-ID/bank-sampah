<div class="container mt-3">
	<form action="<?= BASEURL; ?>/Admin/detail" method="POST" enctype="multipart/form-data">
<center>
	<div class="card bg-success" style="width: 70rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data['portal']['judul'];?></h5>
    <h6 class="card-title">Diposkan pada <?= $data['portal']['tgl'];?></li></h6>
    <p class="card-text"><?= $data['portal']['isi'];?></p>
    <a href="<?= BASEURL; ?>/Admin/transaksi" class="badge badge-danger badge-pill">Kembali</a>
    
  </div>
</div>
</center>

</div>

