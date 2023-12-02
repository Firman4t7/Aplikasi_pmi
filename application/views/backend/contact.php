<?php 
include 'componen/header.php'
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Contact</h1>
	<br>

	<!-- Alert -->
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					Data  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>

		</div>
	<?php endif; ?>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Form Contact
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('kontak/aksiInsertContact')?>">
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat" required>
					<label>No.Telephone</label>
					<input type="text" class="form-control" name="telepone" required="">
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'componen/footer.php'?>