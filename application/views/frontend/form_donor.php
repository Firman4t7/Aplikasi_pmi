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
											<?php if ($data->stok_darah <= 3) : ?>
												<script>
							                // tampillkan alert jika stok_darah kurang dari atau sama dengan 3
							                alert('Perhatian: Stok darah tinggal sedikit untuk golongan darah <?= $data->golongan_darah; ?>!');

							                 // Buat link untuk mengirim pesan ke API WhatsApp
							                 var golonganDarah = '<?= $data->golongan_darah; ?>';
										    var nomorWhatsapp = '6282290385302'; // Ganti dengan nomor WhatsApp yang sesuai
										    var pesan = encodeURIComponent('Halo, Stok darah tinggal sedikit untuk golongan darah' + golonganDarah);

										    var linkWhatsapp = 'https://api.whatsapp.com/send?phone=' + nomorWhatsapp + '&text=' + pesan;

										    // Buka link WhatsApp
										    window.open(linkWhatsapp, '_blank');
										</script>
									<?php endif; ?>
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
</section><!-- End Services Section -->

</main><!-- End #main -->

<?php include'componens/footer.php';?>