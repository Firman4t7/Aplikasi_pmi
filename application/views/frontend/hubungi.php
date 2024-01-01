<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<main id="main">
	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact section-bg">
		<div class="container">
			<br>
			<br>
			<div class="section-title">
				<h2>Hubungi Kami</h2>
				<p>PMI Provinsi Sulawesi Tenggara</p>
			</div>

			<div class="row mt-5 justify-content-center">

				<div class="col-lg-10">

					<div class="info-wrap">
						<div class="row">
							<?php
							foreach ($tampil as $data) {
								?>
								<div class="col-lg-4 info">
									<i class="bi bi-geo-alt"></i>
									<h4>Lokasi:</h4>
									<p><?= $data->alamat; ?></p>
								</div>

								<div class="col-lg-4 info mt-4 mt-lg-0">
									<i class="bi bi-envelope"></i>
									<h4>Email:</h4>
									<p><?= $data->email; ?></p>
								</div>

								<div class="col-lg-4 info mt-4 mt-lg-0">
									<i class="bi bi-phone"></i>
									<h4>Telephone:</h4>
									<p><?= $data->telepon; ?></p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<form action="" method="post" id="form_hub">
						<div class="row">
							<div class="col-md-6 form-group">
								<input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" placeholder="Masukan Nama" required>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
								<input type="email" class="form-control" name="email_pengirim" id="email_pengirim" placeholder="Masukan Email" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="telepon_pengirim" id="telepon_pengirim" placeholder="Masukan Telephone" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="pesan_pengirim" id="pesan_pengirim"  rows="5" placeholder="Masukan Pesan" required></textarea>
						</div>
						<div class="text-center"><button type="button" id="tombol_hub" class="btn btn-primary">Kirim Pesan</button></div>
					</form>
				</div>

			</div>

		</div>
	</section>


</main><!-- End #main -->

<?php include'componens/footer.php';?>
