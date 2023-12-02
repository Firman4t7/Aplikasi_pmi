<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<main id="main">
	<br>
	<!-- ======= Services Section ======= -->
	<!-- <section id="services" class="services section-bg">
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&src=cG1pc3VsdHJhNDBAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="450" height="400" frameborder="0" scrolling="no"></iframe>
				</div>


				<div class="col-lg-6">
					<div class="pr-10">
						<br>
						<h2>Data Pendonor</h2>
					</div>

					<div class="col-md-12 table-responsive" style="">
						<div class="">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Lengkap</th>
										<th>Telephone</th>
										<th>Email</th>
										<th>Pekerjaan</th>
										<th>Tempat Lahir</th>
										<th>Alamat Kantor</th>
										<th>Nomor Telphone Kantor</th>
									</tr>
								</thead>
								<tbody>

									<?php

									$no = 1;
									foreach ($data_pendonor as $data) {

										?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $data->nama_lengkap; ?></td>
											<td><?= $data->no_telepon; ?></td>
											<td><?= $data->email; ?></td>
											<td><?= $data->pekerjaan; ?></td>
											<td><?= $data->tempat_lahir; ?></td>
											<td><?= $data->alamat_kantor; ?></td>
											<td><?= $data->no_telepon_kantor; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="services" class="services section-bg">
		<div class="container">
			<div class="row">
				<!-- Kolom Pencarian -->
				<div class="col-lg-2">
					<div class="pr-10">
						<h2>Pencarian</h2>
						<!-- Form Pencarian -->
						<form action="<?= site_url('data_pendonor/aksi_pencarian'); ?>" method="post">
							<div class="form-group">
								<label for="golongan_darah">Golongan Darah:</label>
								<select class="form-control" name="golongan_darah">	
									<option value="">- Pilih -</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="AB">AB</option>
									<option value="O">O</option>
								</select>
							</div>
							<div class="form-group">
								<label for="umur">Umur:</label>
								<input type="number" class="form-control" name="umur" placeholder=" Umur">
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin:</label>
								<select class="form-control" name="jenis_kelamin">
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Cari</button>
						</form>
					</div>
				</div>


				<!-- Kolom Kalender dan Tabel Data Pendonor -->
				<div class="col-lg-9">
					<div class="row">
						<div class="pr-10">
							<br>
							<h2>Data Pendonor</h2>
							<div class="col-md-12 table-responsive" style="">
								<div class="">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama Lengkap</th>
												<th>Telephone</th>
												<th>Email</th>
												<th>Umur</th>
												<th>Pekerjaan</th>
												<th>Tempat Lahir</th>
												<th>Alamat Kantor</th>
												<th>Nomor Telphone Kantor</th>
											</tr>
										</thead>
										<tbody>

											<?php

											$no = 1;
											foreach ($data_pendonor as $data) {

												?>
												<tr>
													<td><?= $no++; ?></td>
													<td><?= $data->nama_lengkap; ?></td>
													<td><?= $data->no_telepon; ?></td>
													<td><?= $data->email; ?></td>
													<td><?= $data->umur; ?></td>
													<td><?= $data->pekerjaan; ?></td>
													<td><?= $data->tempat_lahir; ?></td>
													<td><?= $data->alamat_kantor; ?></td>
													<td><?= $data->no_telepon_kantor; ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>



</main><!-- End #main -->

<?php include'componens/footer.php';?>