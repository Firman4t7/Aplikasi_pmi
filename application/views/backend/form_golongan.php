<?php include 'componen/header.php'?>

<div class="container-fluid">


	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Golongan Darah</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Golongan Darah

				<!-- Button trigger modal -->
				<button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-plus"></i>	Tambah Data
				</button>
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Golongan Darah</th>
							<th>WB</th>
							<th>PRC</th>
							<th>TC</th>
							<th>Belum Serologi</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($tampilkan as $data) {
							?>
							<tr>
								<td><?= $no++;?></td>
								<td><?= $data->nama_golongan; ?></td>
								<td><?= $data->wb; ?></td>
								<td><?= $data->prc; ?></td>
								<td><?= $data->tc; ?></td>
								<td><?= $data->belum_serologi; ?></td>
								<td><?= $data->stok; ?></td>
								<td>
									<a href="<?= base_url('golongan_darah/form_edit/').$data->id_gol; ?>" class="btn btn-warning">Edit</a>
									<a href="<?= base_url('golongan_darah/aksiDeleteGol/').$data->id_gol; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= base_url('golongan_darah/aksiInsertDarah')?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Golongan Darah</label>
						<input type="text" class="form-control"  name="golongan_darah" required>
					</div> 
					<div class="form-group">
						<label for="">WB</label>
						<input type="text" class="form-control"  name="wb" id="wb" required>
					</div>
					<div class="form-group">
						<label for="">PRC</label>
						<input type="text" class="form-control"  name="prc" id="prc" required>
					</div> 
					<div class="form-group">
						<label for="">TC</label>
						<input type="text" class="form-control"  name="tc" id="tc" required>
					</div> 
					<div class="form-group">
						<label for="">Stok</label>
						<input type="text" class="form-control"  name="stok" id="stok" value="0" readonly>
					</div> 
					<div class="form-group">
						<label for="">Belum Serologi</label>
						<input type="text" class="form-control"  name="belum_serologi" required>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-close"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'componen/footer.php'?>