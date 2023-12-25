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


	<div class="container register-form top-buffer-1">
		<div class="form">
			<div class="note">
				<p>VHEG Fair Registration AUG'19</p>
			</div>
			<div class="form-content bk">
				<form action="#" method="POST">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Data Akun</legend>
						<div class="row">
							<div class="col-sm-4">
								<label for="title">Email</label>
								<input type="name" class="form-control" id="title" placeholder="Masukan Email" name="title">
							</div>
							<div class="col-sm-4">
								<label for="fname">First Name</label>
								<input type="name" class="form-control" id="fmane" placeholder="Manohar" name="fname">
							</div>
							<div class="col-sm-4">
								<label for="lname">Last Name</label>
								<input type="name" class="form-control" id="fmane" placeholder="Manohar" name="lname">
							</div>
						</div>
						<div class="section-to-print" id="section-to-print">
							<div class="row top-buffer">
								<div class="col-sm-3">
									<label for="email">Email ID</label>
									<input type="email" class="form-control" id="email" placeholder="xyz@xyz.com" name="email">
								</div>
								<div class="col-sm-3">
									<label for="dob">Date of Birth</label>
									<input name="date" class="form-control" id="dob" type="dob" />
								</div>
								<div class="col-sm-2">
									<label for="phone">Phone Number</label>
									<input name="phone" class="form-control" id="phone" type="phone" />
								</div>
								<div class="col-sm-4">
									<label for="phone">Gender / Sex</label></br>
									<div class="radio-inline"><label><input type="radio" name="sex" value="male" checked>Male</label></div>
									<div class="radio-inline"><label><input type="radio" name="sex" value="female">Female</label></div>
									<div class="radio-inline"><label><input type="radio" name="sex" value="transgender">Transgender</label></div>
								</div>
							</div>
							<div class="row top-buffer">
								<!-- Address -->
								<div class="form-group col-sm-3">
									<label for="inputAddress">Address</label>
									<input type="text" class="form-control" id="inputAddress" name="add1" placeholder="1234 Main St">
								</div>
								<div class="form-group col-sm-3">
									<label for="inputAddress2">Address 2</label>
									<input type="text" class="form-control" id="inputAddress2" name="add2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="form-row">
									<div class="form-group col-sm-2">
										<label for="inputCity">City</label>
										<input type="text" class="form-control" name="city" id="inputCity">
									</div>
									<div class="form-group col-sm-2">
										<label for="inputState">State</label>
										<select id="inputState" class="form-control">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label for="inputZip">Zip</label>
										<input type="text" class="form-control" name="zip" id="inputZip">
									</div>
								</div>
								<!-- Address -->
							</div>
						</div>
					</fieldset>
					<!-- Educational Qualification -->

					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Educational Qualification</legend>
						<div class="row">
							<div class="col-sm-4">
								<label for="cname">Collage Name</label>
								<input type="name" class="form-control" id="title" placeholder="KITS" name="cname">
							</div>
							<div class="col-sm-4">
								<label for="uname">University Name</label>
								<input type="name" class="form-control" id="fmane" placeholder="JNTUH" name="uname">
							</div>
							<div class="col-sm-4">
								<label for="place">Place</label>
								<input type="name" class="form-control" id="fmane" placeholder="Manohar" name="place">
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<label for="percentage">Percentage %</label>
								<input type="number" class="form-control" id="email" placeholder="xyz@xyz.com" name="percentage">
							</div>
							<div class="col-sm-2">
								<label for="backlogs">Backlogs</label>
								<input name="number" class="form-control" id="dob" type="backlogs" />
							</div>
							<div class="col-sm-2">
								<label for="phone">Specialization</label>
								<select class="form-control" id="sel1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="phone">Majors / Subjects</label>
								<select class="form-control" id="sel1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="yop">Year of Passing</label>
								<input name="number" class="form-control" id="dob" type="yop" />
							</div>
							<div class="col-sm-2">
								<label for="phone">Any Work Exp?</label></br>
								<div class="radio-inline"><label><input type="radio" name="work" value="yes" >Yes</label></div>
								<div class="radio-inline"><label><input type="radio" name="work" value="no" checked>No</label></div>
							</div>
						</div>
					</fieldset>
					<!--Educational Qualification -->
					<!-- Study Abroad Plans -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Study Abroad Plans</legend>
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
					<!-- Study Abroad Plans -->
					<!-- Test Prep -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Test Prep</legend>
						<div class="row">
							<div class="col-sm-2">
								<label for="location">Have you taken any Test Prep?</label>
								<div class="radio-inline"><label><input type="radio" name="testprep" value="yes" >Yes</label></div>
								<div class="radio-inline"><label><input type="radio" name="testprep" value="no" checked>No</label></div>
							</div>
							<div class="col-sm-6">
								<label for="cname">Name of Test Prep</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="IELTS">IELTS</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="PTE">PTE</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="UK">GRE</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="USA">GMAT</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="NZ">TOEFL</label>
								<input type="checkbox" name="tname[]" id="propertytype-8" value="others"> Others
								<input id="propertytype_other" name="tname[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
							</div>
							<div class="col-sm-4">
								<label for="location">Overall Marks</label>
								<input type="number" class="form-control" id="fmane" placeholder="Sydney" name="marks">
							</div>
						</div>
					</fieldset>
					<!-- Study Abroad Plans -->
					<button type="submit" class="btn btn-success" value="submit">Submit </button>
					<button onclick="window.print();return false;" class="btn btn-primary">Print </button>
				</form>
			</div>
		</div>
	</div>



	<!-- ======= Services Section ======= -->
	<!-- <section id="services" class="services section-bg">
		<div class="container">

			<div class="row">
				<div class="row" style="width: 1210px;">
					<div class="col-md-12" style="width: 1430px;">
						<div class="icon-box table-responsive">
							<div class="pr-10">
								<h2>Form Pendonor</h2>
							</div>
							<br>
							<form action="" method="post" id="form_donor">
								<div class="form-group">
									<label>Nomor Kartu Donor</label>
									<input type="text" name="no_kartudonor" class="form-control" >
								</div>
								<div class="form-group">
									<label>Nomor KTP</label>
									<input type="hidden" name="user_id" id="user_id" value="<?= $this->session->userdata('name')?>">
									<input type="number" name="noktp" id="noktp" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Tangal Lahir</label>
									<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Alamat Rumah</label>
									<textarea class="form-control" name="alamat_rumah" id="alamat_rumah" readonly></textarea>
								</div>
								<div class="form-group">
									<label>Nomor telephone</label>
									<input type="text" name="no_telepon" id="no_telepon" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<textarea class="form-control" name="pekerjaan" id="pekerjaan" readonly></textarea>
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Umur</label>
									<textarea class="form-control" name="umur" id="umur" readonly></textarea>
								</div>
								<div class="form-group">
									<label>Alamat Kantor</label>
									<input type="text" name="alamat_kantor" id="alamat_kantor" class="form-control">
								</div>
								<div class="form-group">
									<label>Nomor Telephone Kantor</label>
									<input type="text" class="form-control" name="no_telepon_kantor" id="no_telepon_kantor">
								</div>
								<div class="form-group">
									<label>Golongan Darah</label>
									<select class="form-control" name="golongan_darah" id="golongan_darah">
										<option value="">- Pilih -</option>
										<?php foreach ($tampil as $data) : ?>
											<option value="<?= $data->golongan_darah; ?>">
												<?= $data->golongan_darah; ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Penghargaan Diterima</label>
									<input type="text" name="penghargaan_diterima" id="penghargaan_diterima" class="form-control">
								</div>
								<div class="form-group">
									<label>Bersedia Donor Bulan Puasa</label>
									<select class="form-control" name="bersedia_donor_puasa" id="bersedia_donor_puasa">
										<option value="">- Pilih -</option>
										<option value="iya">iya</option>
										<option value="tidak">Tidak</option>
									</select>
								</div>
								<div class="form-group">
									<label>Bersedia Donor Diluar Rutin</label>
									<select class="form-control" name="bersedia_donor_diluar_rutin" id="bersedia_donor_diluar_rutin">
										<option value="">- Pilih -</option>
										<option value="iya">iya</option>
										<option value="tidak">Tidak</option>
									</select>
								</div>
								<div class="form-group">
									<label>Donor terakhir</label>
									<input type="datetime-local" name="donor_terakhir" id="donor_terakhir" class="form-control">
								</div>
								<div class="form-group">
									<label>Donor keberapa</label>
									<input type="text" name="donor_keberapa" id="donor_keberapa" class="form-control">
								</div>
								<div class="form-group">
									<label></label>
									<button id="tombol_donor" type="button" class="btn btn-primary">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>= -->

</main><!-- End #main -->

<?php include'componens/footer.php';?>