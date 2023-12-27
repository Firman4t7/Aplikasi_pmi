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
						<form  method="post" id="form">
							<h2>Form Registrasi User</h2>
							<br>
							<div class="form-group">
								<label style="float: left;"><b>Email</b></label>
								<input type="email" class="form-control" name="email" id="email"  placeholder="Masukan Email" required>
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
							<div class="form-group">
								<label style="float: left;"><b>Nama Lengkap</b></label>
								<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
							</div>
							<div class="form-group">
								<label style="float: left;"><b>No.Hp</b></label>
								<div class="input-group mb-1">
									<span class="input-group-text">
										+
									</span>
									<input type="text" class="form-control" name="no_hp" id="no_hp" value="62">
								</div>
								<p class="input-group" style="color: red;">"+62" di inputan sama dengan "08" jadi inputkan lanjutan digit nohp belakang</p>
							</div>
							<hr>
							<div class="form-group">
								<button id="tombol_tambah" type="button" class="btn btn-primary" style="float: right;"><i class="fas fa-user-plus"></i> Daftar</button>
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
