<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
	<div class="container">
	  <a class="navbar-brand" href="<?= BASEURL; ?>/Home/index">Bank Sampah</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <!-- <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a> -->
		      <!-- <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
		      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About Me</a> -->
			
			 	<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/index"> Home</a>
				<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/jenis_sampah">Jenis Sampah</a>
				<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/visi">Visi Misi</a>
				<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/produk">Produk</a>
				<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/portal">portal</a>
				<a class="nav-item nav-link" href="<?= BASEURL; ?>/Home/login">Log In</a>
			
		    </div>
		  </div>
	  </div>

</nav>	