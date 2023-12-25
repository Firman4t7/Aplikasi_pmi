<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<!-- <style>
	.text-center
	{
		width: 90px;
	}

	.icon-box 
	{
		overflow-x: hidden;
	}


	@media (max-width: 767px) {
		.col-md-11 {
			width: 100%;
			margin-right: 10px;
		}



		.panel_tgl {
			margin-bottom: 20px;
			background-color: #ffffff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			text-align: center;
			width: 77px;
		}

		.panel-heading-tgl {
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			color: white;
			background-color: #f5f5f5;
			border-color: #ddd;
			background-color: #428bca;
			color: #fff;
			background-color: #428bca;
			border-color: #428bca
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px

		}


		.media-left{
			display: table-cell;
			vertical-align: top;
		}

		.media-list {
			padding-left: 0;
			list-style: none
		}


		.media-body{
			display: table-cell;
			vertical-align: top;
			-ms-flex: 1;
			flex: 1;
			margin-top: 20px;
		}

		.media {
			margin-top: 15px;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: start;
			align-items: flex-start;
		}

		.panel-body-tgl {
			padding: 10px;
		}



		/* Panel Style */
		.panel {
			margin-bottom: 20px;
			background-color: #ffffff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		}

		.panel-heading {
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			color: white;
			background-color: #f5f5f5;
			border-color: #ddd;
			background-color: #428bca;

		}

		.panel-title {
			margin-top: 0;
			margin-bottom: 0;
			font-size: 16px;
		}

		.panel-body {
			padding: 15px;
			box-sizing:border-box;
		}

		/* Optional: Panel Footer Style */
		.panel-footer {
			padding: 10px 15px;
			background-color: #f5f5f5;
			border-top: 1px solid #ddd;
			border-bottom-left-radius: 3px;
			border-bottom-right-radius: 3px;
		}

		/* Optional: Primary Button Style */
		.btn_more {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
			color: #fff;
			background-color: #337ab7;
			border-color: #2e6da4;
		}

		.btn_more:hover,
		.btn_more:focus {
			color: #fff;
			background-color: #286090;
			border-color: #204d74;
		}

	}


	@media (min-width: 768px) {
		.col-md-11 {
			width: 100%;
			margin-right: 10px;
		}



		.panel_tgl {
			margin-bottom: 20px;
			background-color: #ffffff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			text-align: center;
			width: 77px;
		}

		.panel-heading-tgl {
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			color: white;
			background-color: #f5f5f5;
			border-color: #ddd;
			background-color: #428bca;
			color: #fff;
			background-color: #428bca;
			border-color: #428bca
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px

		}


		.media-left{
			display: table-cell;
			vertical-align: top;
		}

		.media-list {
			padding-left: 0;
			list-style: none
		}


		.media-body{
			display: table-cell;
			vertical-align: top;
			-ms-flex: 1;
			flex: 1;
			margin-top: 20px;
		}

		.media {
			margin-top: 15px;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: start;
			align-items: flex-start;
		}

		.panel-body-tgl {
			padding: 10px;
		}



		/* Panel Style */
		.panel {
			margin-bottom: 20px;
			background-color: #ffffff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		}

		.panel-heading {
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			color: white;
			background-color: #f5f5f5;
			border-color: #ddd;
			background-color: #428bca;

		}

		.panel-title {
			margin-top: 0;
			margin-bottom: 0;
			font-size: 16px;
		}

		.panel-body {
			padding: 15px;
			box-sizing:border-box;
		}

		/* Optional: Panel Footer Style */
		.panel-footer {
			padding: 10px 15px;
			background-color: #f5f5f5;
			border-top: 1px solid #ddd;
			border-bottom-left-radius: 3px;
			border-bottom-right-radius: 3px;
		}

		/* Optional: Primary Button Style */
		.btn_more {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
			color: #fff;
			background-color: #337ab7;
			border-color: #2e6da4;
		}

		.btn_more:hover,
		.btn_more:focus {
			color: #fff;
			background-color: #286090;
			border-color: #204d74;
		}

	}




	/* Warna Latar Belakang - Biru */
	.icon-box.hijau {
		background-color: green;
		color: white; /* Warna teks putih untuk kontras */
	}

	/* Warna Latar Belakang - Merah */
	.icon-box.merah {
		background-color: red;
		color: white; /* Warna teks putih untuk kontras */
	}

	/* Gaya Teks */
	h4 {
		font-size: 20px;
		margin-bottom: 10px;
	}

	p {
		font-size: 16px;
		color: #777;
	}


	/*data box*/
	.data-box {
		border: 2px solid white;  
		padding: 10px;  
		background-color: none;  
		border-radius: 8px;  
	}

	.data-box p {
		margin: 0; 
		color: white; 
	}



</style> -->


<style>
	/* Common styles for both desktop and mobile */
	.text-center {
		width: 90px;
	}

	.icon-box {
		overflow-x: hidden;
		border: 2px solid white;
		padding: 10px;
		border-radius: 8px;
		height: 100%; 
	}

	.panel_tgl {
		margin-bottom: 20px;
		background-color: #ffffff;
		border: 1px solid #ddd;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		text-align: center;
		width: 77px;
	}

	.panel-heading-tgl {
		padding: 10px 15px;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		color: white;
		background-color: #f5f5f5;
		border-color: #ddd;
		background-color: #428bca;
		color: #fff;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
	}

	.media-left,
	.media-body {
		display: table-cell;
		vertical-align: top;
	}

	.media-list {
		padding-left: 0;
		list-style: none;
	}

	.media {
		margin-top: 15px;
		display: flex;
		align-items: flex-start;
	}

	.panel-body-tgl {
		padding: 10px;
	}

	.panel {
		margin-bottom: 20px;
		background-color: #ffffff;
		border: 1px solid #ddd;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
	}

	.panel-heading {
		padding: 10px 15px;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		color: white;
		background-color: #f5f5f5;
		border-color: #ddd;
		background-color: #428bca;
	}

	.panel-title {
		margin-top: 0;
		margin-bottom: 0;
		font-size: 16px;
	}

	.panel-body {
		padding: 15px;
		box-sizing: border-box;
	}

	.panel-footer {
		padding: 10px 15px;
		background-color: #f5f5f5;
		border-top: 1px solid #ddd;
		border-bottom-left-radius: 3px;
		border-bottom-right-radius: 3px;
	}

	.btn_more {
		display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		cursor: pointer;
		background-image: none;
		border: 1px solid transparent;
		border-radius: 4px;
		color: #fff;
		background-color: #337ab7;
		border-color: #2e6da4;
	}

	.btn_more:hover,
	.btn_more:focus {
		color: #fff;
		background-color: #286090;
		border-color: #204d74;
	}

	/* Warna Latar Belakang - Biru */
	.icon-box.hijau {
		background-color: green;
		color: white;
		/* Warna teks putih untuk kontras */
	}

	/* Warna Latar Belakang - Merah */
	.icon-box.merah {
		background-color: red;
		color: white;
		/* Warna teks putih untuk kontras */
	}

	/* Gaya Teks */
	h4 {
		font-size: 20px;
		margin-bottom: 10px;
	}

	p {
		font-size: 16px;
		color: #777;
	}

	/*data box*/
	.data-box {
		border: 2px solid white;
		padding: 10px;
		background-color: none;
		border-radius: 8px;
		transition: background-color 0.3s;
	}

	.data-box p {
		margin: 0;
		color: white;
	}

	.data-box:hover {

		background-color: #808080;
		cursor: pointer;
	}





	/* Styles for devices with a maximum width of 767px (Mobile) */
	@media (max-width: 767px) {
		.col-md-11 {
			width: 100%;
		}

		/* Add additional mobile styles here */
	}

	/* Styles for devices with a minimum width of 768px (Desktop) */
	@media (min-width: 768px) {
		.col-md-11 {
			width: 100%;
			margin-right: 10px;
		}

		/* Add additional desktop styles here */
	}

	.fixed - element {
		position: fixed;
		top: 0;
		left: 0;
	}



	.media-heading{

		margin-left: none;
	}



</style>



<!-- ======= Hero Section ======= -->
<section  class="d-flex flex-column justify-content-center align-items-center">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 1262px;">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-1.jpeg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('Register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-2.jpg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('Register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-3.jpg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section><!-- End Hero -->

<main id="main">



	<!-- ======= What We Do Section ======= -->
	<section id="what-we-do" class="what-we-do" style="padding:19px;">
		<div class="container fixed-element">
			<div class="pr-10">
				<h2>Data Ketersediaan Darah</h2>
				<p>Update Terakhir : <?= date('d-m-Y H:i:s');?> </p>
			</div>

			<div class="row fixed-element">
				<?php 
				foreach ($tampil as $data) {

					 // Tentukan kelas warna latar belakang berdasarkan nilai stok
					$warna_latar = ($data->stok_darah > 9) ? 'hijau' : 'merah';
					?>

					<div class="col-lg-3 col-md-6 align-items-stretch">
						<div class="icon-box <?= $warna_latar; ?>">
							<div class="icon">
								<i class="fas fa-hospital"></i>
							</div>
							<h4 class="fixed-element">Golongan Darah (<?= $data->nama_golongan; ?>)</h4>

							<div class="data-box fixed-element">
								<p>WB: <?= $data->wb; ?></p>
								<p>PRC: <?= $data->prc; ?></p>
								<p>TC: <?= $data->tc; ?></p>
								<p>Belum Serologi: <?= $data->belum_serologi; ?></p>
							</div>
							<br>
							<h5 style="color: white;">Stok Darah : <?= $data->stok_darah; ?> </h5>
						</div>
					</div>




				<?php } ?>


			</div>
		</div>
	</section>



	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">
			<div class="row" style="">
				<div class="col-md-12">
					<div class="icon-box table-responsive">
						<div class="pr-10 mb-4">
							<h2 align="center">Jadwal Kegiatan</h2>
						</div>

						<!-- panel -->
						<div class="col-md-11">
							<div class="panel-body">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Calender Event</h3>
									</div>
									<ul class="media-list">
										<?php
										foreach ($jadwal as $data) {
											$waktu = strtotime($data->waktu);
											$tanggal = date('d', $waktu);
											$bulan = date('M', $waktu);

											?>
											<li class="media">
												<div class="media-left">
													<div class="panel-body">
														<div class="panel_tgl">
															<div class="panel-heading-tgl">
																<span class="text-center">
																	<?= $bulan ?>	
																</span>
															</div>
															<div class="panel-body-tgl text-primary">
																<span class="text-center">
																	<?= $tanggal ?>	
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media-body">
													<h4 class="media-heading">
														<?= $data->instansi ?>
													</h4>
													<p><?= $data->ket ?></p>
												</div>
											</li>
										<?php } ?>
									</ul>
									<div class="panel-footer">
										<a href="<?= base_url('beranda/TampilJadwalKegiatan')?>" class="btn_more btn-primary btn-block">More Events »</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Services Section -->
</main><!-- End #main -->

<?php include'componens/footer.php';?>

