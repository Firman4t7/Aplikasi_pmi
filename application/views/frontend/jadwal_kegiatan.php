<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<main id="main">
	<br>
	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&src=cG1pc3VsdHJhNDBAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="450" height="400" frameborder="0" scrolling="no"></iframe>
				</div>

				<div class="col-lg-6">

					<div class="pr-10">
						<br>
						<h2>Jadwal Kegiatan</h2>
					</div>

					<div class="row">
						<div class="col-md-12 table-responsive" style="">
							<div class="">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No.</th>
											<th>Waktu</th>
											<th>Instansi</th>
											<th>Tempat Kegiatan</th>
											<th>Jam</th>
											<th>Keterangan</th>
											<th>Update By</th>
											<th>Update At</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										<?php 
										$no = 1;
										foreach ($jadwal as $row) {

											?>
											<tr>
												<td><?= $no++; ?></td>
												<td class="text-dark text-nowrap"><?= $row->waktu;?></td>
												<td class="text-dark text-nowrap"><?= $row->instansi;?></td>
												<td class="text-dark text-nowrap"><?= $row->tempat_kegiatan;?></td>
												<td><?= $row->jam;?></td>
												<td><?= $row->ket;?></td>
												<td><?= $row->update_by;?></td>
												<td><?= $row->update_at;?></td>
												<td class="text-dark text-nowrap">
													<a href="<?php echo base_url('jadwal_kegiatan/Detailjadwal/'). $row->id_keg; ?>" class="btn btn-primary">Detail</a>
												</td>

											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Services Section -->


		<!-- ======= Contact Section ======= -->
	<!-- <section id="contact" class="contact section-bg">
		<div class="container">

			<div class="section-title">
				<h2>Contact</h2>
				<p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
			</div>

			<div class="row mt-5 justify-content-center">

				<div class="col-lg-10">

					<div class="info-wrap">
						<div class="row">
							<div class="col-lg-4 info">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>A108 Adam Street<br>New York, NY 535022</p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>info@example.com<br>contact@example.com</p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>+1 5589 55488 51<br>+1 5589 22475 14</p>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
						<div class="row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
						</div>
						<div class="my-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<div class="text-center"><button type="submit">Send Message</button></div>
					</form>
				</div>

			</div>

		</div>
	</section> -->

</main><!-- End #main -->

<?php include'componens/footer.php';?>
