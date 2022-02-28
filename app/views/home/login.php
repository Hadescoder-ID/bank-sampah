<div class="container mt-3">
    <div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();
			?>
		</div>
	</div>
		<div class="row justify-content-center" style="margin-top: 100px;">
			<div class="col-4">	
				<h1 class="text-center text-dark">Login Di Bank Sampah</h1>
                <form action="<?= BASEURL; ?>/Home/loginAct" method="POST" enctype="multipart/form-data">
                    <input class="form-control form-control-lg mt-2" type="text" name="username" id="username" placeholder="Username">
                    <input class="form-control form-control-lg mt-2" type="password" name="password" id="password" placeholder="Password">
					<input type="submit" name="submit" value="Login" class="btn btn-succes btn-block">
					<!--<a href="<?= BASEURL; ?>/Home/register" class="btn btn-warning btn-block">Register</a>
                    <p class=" text-center text-dark">
                        <a href="<?= BASEURL; ?>/Home/lupa" >Lupa Password<h7></a>-->
                    </p> 
                </form>
			</div>
		</div>
	</div>