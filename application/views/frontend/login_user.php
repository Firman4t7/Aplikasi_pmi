<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>

<style>
	#btn_google {
		border: 2px solid #3498db; /* Warna garis tepi */
		text-decoration: none; /* Menghilangkan garis bawah pada tautan */
		border-radius: 5px; /* Membuat sudut border menjadi melengkung */
	}




	.google-btn {
		align-items: center;
		padding: 10px 20px;
		background-color: #fff;
		border: 2px solid #4285f4; /* Google Blue */
		color: #4285f4; /* Google Blue */
		font-size: 14px;
		font-weight: bold;
		text-decoration: none;
		border-radius: 4px;
		transition: background-color 0.3s ease;
	}

	.google-btn:hover {
		background-color: #f0f0f0;
	}

	.google-icon {
		margin-top: 30px;
		border-right-width: 20px;
		margin-right: 10px;
		width: 20px;
		height: 20px;
		
	}


</style>

<main id="main">
	<br>

	<section id="team" class="team">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 col-md-6">
					<div class="member">
						<form method="post" action="<?= base_url('auth_login/aksi_login')?>">
							<h2>Form Login User</h2>
							<br>
							<div class="form-group">
								<label style="float: left;"><b>Email</b></label>
								<input type="email" class="form-control" name="email"  placeholder="Masukan Username" required="">
							</div>
							<div class="form-group">
								<label style="float: left;"><b>Password</b></label>
							</div>
							<div class="input-group mb-3">
								<input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" class="mt-10" 
								aria-label="Insert Password" aria-describedby="basic-addon2">
								<span class="input-group-text" id="showHide">
									<i class="bi bi-eye"></i>
								</span>
							</div>
							<hr>
							<div class="form-group ml-5">
								<a href="" class="btn btn-danger" style="float: right;margin-left: 10px;"><i class="fab fa-google-plus-g"></i>&nbsp;&nbsp;Sign With Goggle</a>
							</div>
							<div class="form-group ml-5">
								<button type="submit" class="btn btn-primary" style="float: right;"><i class="fas fa-user-plus"></i> Login</button>
								
							</div>
						</form>


						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>

	



</main><!-- End #main -->

<?php include'componens/footer.php';?>
