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
				<!-- <div class="col-lg-6">
					<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&src=cG1pc3VsdHJhNDBAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="450" height="400" frameborder="0" scrolling="no"></iframe>
				</div> -->

				<!-- <div class="col-lg-6">
				</div> -->

				<div class="">
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
		</section><!-- End Services Section -->
	</main><!-- End #main -->

	<?php include'componens/footer.php';?>
