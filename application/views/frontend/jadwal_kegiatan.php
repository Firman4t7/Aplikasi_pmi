<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<style>
	.agenda {  

	}

	/* Dates */
	.agenda .agenda-date { width: 170px; }
	.agenda .agenda-date .dayofmonth {
		width: 40px;
		font-size: 36px;
		line-height: 36px;
		float: left;
		text-align: right;
		margin-right: 10px; 
	}
	.agenda .agenda-date .shortdate {
		font-size: 0.75em; 
	}


	/* Times */
	.agenda .agenda-time { width: 140px; } 


	/* Events */
	.agenda .agenda-events {  } 
	.agenda .agenda-events .agenda-event {  } 

	@media (max-width: 767px) {

	}
</style>


<main id="main">
	<br>
	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">

			<div class="row">
				<div class="">
					<br>
					<h2>Jadwal Kegiatan</h2>
				</div>

				<hr/>

				<div class="agenda table-responsive">
					<div class="">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Waktu</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<!-- Single event in a single day -->


								<?php 
								$no = 1;
								foreach ($jadwal as $row) {

									$dateTime = strtotime($row->waktu); 
									$tanggal = date('d', $dateTime); 
									$tahun = date('Y', $dateTime);
									$tanggal_semua = date('Y-m-d', $dateTime); 
									$jam = date('H:i:s', $dateTime); 
									$jam_am_pm = date('g:i A', $dateTime); 

    								// Menampilkan nama bulan lengkap
									$nama_bulan = date('F', $dateTime);


									?>

									<tr>
										<td class="agenda-date" class="active" rowspan="1">
											<div class="dayofmonth"><?= $tanggal; ?></div>
											<div class="dayofweek"><?= $nama_bulan; ?></div>
											<div class="shortdate text-muted"><?= $tahun; ?></div>
										</td>
										<td class="agenda-time">
											<?= $jam_am_pm; ?>
										</td>
										<td class="agenda-events">
											<div class="agenda-event">
												<i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
												<?= $row->ket; ?>
											</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>


		</section><!-- End Services Section -->
	</main><!-- End #main -->

	<?php include'componens/footer.php';?>
