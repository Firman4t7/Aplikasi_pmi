<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 


$ids = $this->session->userdata('id_user');


?>


<!-- css -->
<style>
	body{
		background-image: url(https://bit.ly/2KhEw1d);
		background-position-x: center;
		background-position-y: center;
		background-size: cover;
		background-repeat-x: no-repeat;
		background-repeat-y: no-repeat;
		background-attachment: fixed;
		background-origin: initial;
		background-clip: initial;
		background-color: initial;
	}
	.top-buffer-1 { margin-top:20px; }
	.top-buffer { margin-top:2px; }
	fieldset.scheduler-border {
		border: 1px groove #ddd !important;
		padding: 0 1.4em 1.4em 1.4em !important;
		margin: 0 0 1.5em 0 !important;
		-webkit-box-shadow:  0px 0px 0px 0px #000;
		box-shadow:  0px 0px 0px 0px #000;
	}

	legend.scheduler-border {
		font-size: 1.2em !important;
		font-weight: bold !important;
		text-align: left !important;
		width:auto;
		padding:0 1px;
		border-bottom:none;
	}
	.login-wrapper {
		width: 100%;
		height: 100%;
		position: absolute;
		display: table;
		z-index: 2;
	}
	.note
	{
		text-align: center;
		height: 80px;
		background: -webkit-linear-gradient(left, #0072ff, #8811c5);
		color: #fff;
		font-weight: bold;
		line-height: 80px;
	}
	.note p{ font-size:30px; }
	.form-content
	{
		padding: 5%;
		border: 1px solid #ced4da;
		margin-bottom: 2%;
	}
	.form-control{
		border-radius:1.5rem;
	}
	.bk{
		background-color: white;
	}
	@media print {
		body * {
			visibility: visible;
		}
		#section-to-print, #section-to-print * {
			visibility: hidden;
		}
		#section-to-print {
			position: absolute;
			left: 0;
			top: 0;
		}
		.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
			float: left;
		}
		.col-sm-12 {
			width: 100%;
		}
		.col-sm-11 {
			width: 91.66666667%;
		}
		.col-sm-10 {
			width: 83.33333333%;
		}
		.col-sm-9 {
			width: 75%;
		}
		.col-sm-8 {
			width: 66.66666667%;
		}
		.col-sm-7 {
			width: 58.33333333%;
		}
		.col-sm-6 {
			width: 50%;
		}
		.col-sm-5 {
			width: 41.66666667%;
		}
		.col-sm-4 {
			width: 33.33333333%;
		}
		.col-sm-3 {
			width: 25%;
		}
		.col-sm-2 {
			width: 16.66666667%;
		}
		.col-sm-1 {
			width: 8.33333333%;
		}
	}
</style>


<main id="main">
	<br>

	<section id="services" class="services section-bg">
		<div class="container">
			<div class="row" style="">
				<div class="col-md-12">
					<div class="icon-box table-responsive">
						<div class="pr-10 mb-4">
							<h2 style="color: black;" align="center">Form Donor Darah</h2>
						</div>

						<!-- form daftar -->

						<div class="form-content bk">
							<form action="#" method="POST">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Akun</legend>
									<div class="row">
										<div class="col-sm-4">
											<label for="title">Email</label>
											<input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
										</div>
										<div class="col-sm-4">
											<label for="fname">Nama Lengkap</label>
											<input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap" name="nama_lengkap">
										</div>
										<div class="col-sm-4">
											<label for="lname">No.Hp</label>
											<input type="text" class="form-control" id="no_hp" placeholder="Masukan No.Hp" name="no_hp">
										</div>
									</div>
								</fieldset>
								<!-- Educational Qualification -->

								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Pendonor</legend>
									<div class="row">
										<div class="col-sm-4">
											<label for="cname">No.Kartu Pendonor</label>
											<input type="text" class="form-control" id="no_kartudonor" placeholder="Masukan No.Kartu" name="no_kartudonor">
										</div>
										<div class="col-sm-4">
											<label for="uname">Golongan Darah</label>
											<select class="form-control" id="golongan_darah" name="	golongan_darah">
												<option value="">- Pilih -</option>
												<option value="">A</option>
												<option value="">B</option>
												<option value="">AB</option>
												<option value="">O</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label for="place">Bersedia Donor Di Bulan Puasa</label>
											<select class="form-control" name="bersedia_donor_puasa" id="bersedia_donor_puasa">
												<option value="">- Pilih -</option>
												<option value="iya">iya</option>
												<option value="tidak">Tidak</option>
											</select>
										</div>
									</div>
									<div class="row top-buffer">
										<div class="col-sm-4">
											<label for="percentage">Bersedia Donor Diluar Rutin</label>
											<select class="form-control" name="bersedia_donor_diluar_rutin" id="bersedia_donor_diluar_rutin">
												<option value="">- Pilih -</option>
												<option value="iya">iya</option>
												<option value="tidak">Tidak</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label for="backlogs">Donor Terakhir</label>
											<input type="datetime-local" name="donor_terakhir" id="donor_terakhir" class="form-control">
										</div>
										<div class="col-sm-4">
											<label for="phone">Donor Keberapa</label>
											<input type="number" name="donor_keberapa" id="donor_keberapa" placeholder="Donor Keberapa" class="form-control">
										</div>
									</div>
								</fieldset>
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Pribadi</legend>
									<div class="row">
										<div class="col-sm-8">
											<label for="cname">Country Intrested For</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Australia">Australia</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Canada">Canada</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="UK">UK</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="USA">USA</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="NZ">NZ</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Italy">Italy</label>
											<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Germany">Germany</label>
											<input type="checkbox" name="country[]" id="propertytype-8" value="others">
											<input id="propertytype_other" name="country[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
										</div>
										<div class="col-sm-4">
											<label for="location">Location</label>
											<input type="name" class="form-control" id="fmane" placeholder="Sydney" name="location">
										</div>
									</div>
								</fieldset>
								<button type="button" class="btn btn-primary" id="tombol_donor"> Submit</button>
							</form>
						</div>



					</div>
				</div>
			</div>
		</div>
	</section>

</main><!-- End #main -->

<?php include'componens/footer.php';?>