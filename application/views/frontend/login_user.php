<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


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
								<label style="float: left;"><b>username</b></label>
								<input type="text" class="form-control" name="username"  placeholder="Masukan Username" required="">
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
							<div class="form-group">
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
