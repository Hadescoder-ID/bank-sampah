<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/transaksi/index">Transaksi</a>
			  <a class="nav-item nav-link" href="<?= BASEURL; ?>/jenis_sampah/index">Jenis_sampah</a>
			  <li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Profile </a>
      				<div class="dropdown-menu">
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Home/Profile">Profile</a>
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Home/Setting">Setting</a>
        			<div role="separator" class="dropdown-divider"></div>
        				<a class="dropdown-item" href="<?= BASEURL; ?>/Home/Logout">Logout</a>
      				</div>
    			</li>
		    </div>
		  </div>
	  </div>
	</div>
</nav>	