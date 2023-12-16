<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2020</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Logout?</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">Pilih Tombol "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
		<div class="modal-footer">
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			<a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
		</div>
	</div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('template/template_admin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('template/template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('template/template_admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('template/template_admin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/template_admin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('template/template_admin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('template/template_admin/ckeditor/ckeditor.js') ?>"></script>


<!-- Page level custom scripts -->
<script src="<?= base_url('template/template_admin/js/demo/datatables-demo.js') ?>"></script>



<script>
	$(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {

        	var id_data = document.getElementById('id');
        	var hp = document.getElementById('hp_wa');
        	var pesan = document.getElementById('pesan_wa');


        	console.log(id_data)
        	console.log(hp)
        	console.log(pesa)

        });
    });
</script>


<script>
	$(document).ready(function() {
        var rows = $("#dataTable tbody tr"); // Mendapatkan semua baris tabel

        rows.each(function() {
            var stokDarah = parseInt($(this).find("td:eq(2)").text()); // Mengambil nilai stok_darah dari kolom ke-3

            if (stokDarah === 3) {
                // Menampilkan alert jika stok_darah kurang dari atau sama dengan 3
                alert("Peringatan: Stok darah tinggal " + stokDarah + " kantong di golongan darah " + $(this).find("td:eq(1)").text());

                 // Tambahkan konfirmasi dialog
                 var confirmNotif = confirm("Apakah Anda ingin mengirim notifikasi ke WhatsApp?");

                // Cek apakah pengguna menekan OK
                if (confirmNotif) {
                    // Redirect ke halaman tertentu setelah menutup alert
                    window.location.href = "<?= base_url('data_user')?>";
                } else {
                    // Pengguna membatalkan, tambahkan logika tambahan atau hapus baris ini jika tidak diperlukan
                    console.log("Pengguna membatalkan pengiriman notifikasi.");
                }

            }
        });
    });
</script>



<script>
	$(function(){

		CKEDITOR.replace('editor')
	});
</script>

</body>

</html>