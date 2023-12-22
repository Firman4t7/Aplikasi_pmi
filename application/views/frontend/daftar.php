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
								<label style="float: left;"><b>email</b></label>
								<input type="email" class="form-control" name="email" id="email"  placeholder="Masukan Email" required>
							</div>
							<div class="form-group">
								<label style="float: left;"><b>username</b></label>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Masukan Username" required="">
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
								<label style="float: left;"><b>Nomor KTP</b></label>
								<input type="text" class="form-control" name="no_ktp" id="no_ktp"  placeholder="Masukan No.Ktp" required>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Nama Lengkap</b></label>
								<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Tanggal lahir</b></label>
								<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"  required>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Jenis Kelamin</b></label>
								<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
									<option value="">-Pilih-</option>
									<option value="laki-laki">Laki-laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Alamat Rumah</b></label>
								<textarea class="form-control" name="alamat_rumah" id="	alamat_rumah" placeholder="Masukan Alamat Rumah"></textarea>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>No Telephone</b></label>
								<div class="input-group mb-1">
									<span class="input-group-text">
										+
									</span>
									<input type="text" class="form-control" name="no_telepon" id="no_telepon" value="62">
								</div>
								<p class="input-group" style="color: red;">"+62" di inputan sama dengan "08" jadi inputkan lanjutan digit nohp belakang</p>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Pekerjaan</b></label>
								<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" required>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Umur</b></label>
								<input type="text" class="form-control" name="umur" id="umur" placeholder="Masukan Umur" required>
							</div>

							<div class="form-group">
								<label style="float: left;"><b>Tempat Lahir</b></label>
								<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat lahir"  required>
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
