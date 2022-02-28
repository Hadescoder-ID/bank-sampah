<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<div class="container">
	  <a class="navbar-brand" href="<?= BASEURL; ?>/Admin/index">Bank Sampah</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <!-- <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a> -->
		      <!-- <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
		      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About Me</a> -->
			 
			  <li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Sampah </a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Admin/kat_sampah">Data Kat Sampah</a>
			  			<a class="dropdown-item" href="<?= BASEURL; ?>/Admin/jenis_sampah">Data Jenis Sampah</a>
      				</div>
      		</li>
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/karyawan">Data Karyawan</a>
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/transaksi">Data Transaksi</a>
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/kurir">Data Kurir</a>
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/portal">Data Portal</a>
			   <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/produk">Data Produk</a>
			   <a class="nav-item nav-link" href="<?= BASEURL; ?>/Admin/vimi">Data Visi & Misi</a>
			  <!--<li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> VISI & MISI </a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Admin/Visi">Visi</a>
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Admin/misi">Misi</a>-->
        				
        				
        			
    			</li>
			  <li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Profile </a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Home/Profile">Profile</a>
        				
        			<div role="separator" class="dropdown-divider"></div>
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Home/Logout">Logout</a>
      				</div>
    			</li>
		    </div>
		  </div>
	  </div>
	</div>
</nav>	