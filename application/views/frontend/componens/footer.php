<!-- ======= Footer ======= -->
<footer id="footer">


	<div class="container d-md-flex py-4">

		<div class="me-md-auto text-center text-md-start">
			<div class="copyright">
				&copy; Copyright <strong><span><a href="https://www.instagram.com/firman_4t7/" target="_blank">Firman_4t7</a></span></strong>. All Rights Reserved
			</div>
		</div>
	</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<!-- Modal -->
<div class="modal fade" id="modallogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Jika Anda Ingin Logout Silahkan Klik Tombol "Keluar"!
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('auth_login/logout_user'); ?>" class="btn btn-primary"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?= base_url('template_front/lumia/assets/vendor/purecounter/purecounter_vanilla.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/waypoints/noframework.waypoints.js')?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/php-email-form/validate.js')?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/template_admin/ckeditor/ckeditor.js') ?>"></script>

<!-- datatables -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Page level custom scripts -->
<script src="<?= base_url('template/template_admin/js/demo/datatables-demo.js') ?>"></script>


<!-- Template Main JS File -->
<script src="<?= base_url('template_front/lumia/assets/js/main.js')?>"></script>


<!-- Register -->
<script>
    $(document).ready(function(){
        $("#tombol_tambah").click(function(){
        // Mengambil nilai input
        var email = $("#email").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var no_ktp = $("#no_ktp").val();
        var nama_lengkap = $("#nama_lengkap").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var alamat_rumah = $("#alamat_rumah").val();
        var no_telepon = $("#no_telepon").val();
        var pekerjaan = $("#pekerjaan").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var umur = $("#umur").val();
        // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

        // Memeriksa apakah nilai input tidak kosong
        if (email === '' || username === '' || password === '' || no_ktp === '' || nama_lengkap === '' || tgl_lahir === '' || jenis_kelamin === '' || alamat_rumah === '' || no_telepon === '' || pekerjaan === '' || tempat_lahir === ''|| umur === '') {
            // Menampilkan pesan kesalahan jika ada input yang kosong
            Swal.fire({
                title: "Error!",
                text: "Mohon lengkapi semua kolom.",
                icon: "error"
            });
            return; // Menghentikan eksekusi fungsi jika ada input yang kosong
        }

        // Serialize form data
        var data = $('#form').serialize();

        // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
        $.ajax({
            type    : 'POST',
            url     : "<?php echo base_url(); ?>register/AksiInsertuser",
            data    : data,
            success : function(response){
                Swal.fire({
                    title: "Success!",
                    text: "Anda Sudah Registrasi, Silahkan Login!",
                    icon: "success"
                }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed || result.isDismissed) {
                        // Redirect to a new page
                        window.location.href = "<?php echo base_url(); ?>Auth_login/index";
                    }
                });
            },
            error   : function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
    });

</script>


<!-- Hubungi -->
<script>
    $(document).ready(function(){
        $("#tombol_hub").click(function(){
        // Mengambil nilai input
        var nama_pengirim = $("#nama_pengirim").val();
        var email_pengirim = $("#email_pengirim").val();
        var telepon_pengirim = $("#telepon_pengirim").val();
        var pesan_pengirim = $("#pesan_pengirim").val();
        // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

        // Memeriksa apakah nilai input tidak kosong
        if (nama_pengirim === '' || email_pengirim === '' || telepon_pengirim === '' || pesan_pengirim === '') {
            // Menampilkan pesan kesalahan jika ada input yang kosong
            Swal.fire({
                title: "Error!",
                text: "Mohon lengkapi semua kolom.",
                icon: "error"
            });
            return; // Menghentikan eksekusi fungsi jika ada input yang kosong
        }

        // Serialize form data
        var data = $('#form_hub').serialize();

        // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
        $.ajax({
            type    : 'POST',
            url     : "<?php echo base_url(); ?>Hubungi_kami/AksiInserHubungi",
            data    : data,
            success : function(response){
                Swal.fire({
                    title: "Success!",
                    text: "Pesan Anda sudah Terkirim",
                    icon: "success"
                }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed || result.isDismissed) {
                        // Redirect to a new page
                        window.location.href = "<?php echo base_url(); ?>Hubungi_kami";
                    }
                });
            },
            error   : function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
    });

</script>


<script>
    $(document).ready(function(){
        $("#tombol_donor").click(function(){
        // Mengambil nilai input
        var no_kartudonor = $("#no_kartudonor").val();
        var noktp = $("#noktp").val();
        var nama_lengkap = $("#nama_lengkap").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var email = $("#email").val();
        var alamat_rumah = $("#alamat_rumah").val();
        var no_telepon = $("#no_telepon").val();
        var pekerjaan = $("#pekerjaan").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var alamat_kantor = $("#alamat_kantor").val();
        var no_telepon_kantor = $("#no_telepon_kantor").val();
        var golongan_darah = $("#golongan_darah").val();
        var penghargaan_diterima = $("#penghargaan_diterima").val();
        var bersedia_donor_puasa = $("#bersedia_donor_puasa").val();
        var donor_terakhir = $("#donor_terakhir").val();
        var donor_keberapa = $("#donor_keberapa").val();

        // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada
        // Memeriksa apakah nilai input tidak kosong
        if (no_kartudonor === '' || noktp === '' || nama_lengkap === '' || tgl_lahir === '' || jenis_kelamin === '' || email === '' || alamat_rumah === '' || no_telepon === '' || pekerjaan === '' || tempat_lahir === '' || alamat_kantor === '' || no_telepon_kantor === '' || golongan_darah === '' || penghargaan_diterima === '' || bersedia_donor_puasa === '' || donor_terakhir === '' || donor_keberapa === '') {
            // Menampilkan pesan kesalahan jika ada input yang kosong
            Swal.fire({
                title: "Error!",
                text: "Mohon lengkapi semua kolom.",
                icon: "error",
                timer: 100000, // Waktu tampilan pesan dalam milidetik (misalnya, 3000ms atau 3 detik)
            });
            return; // Menghentikan eksekusi fungsi jika ada input yang kosong

        }

        // Serialize form data
        var data = $('#form_donor').serialize();

        // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
        $.ajax({
            type    : 'POST',
            url     : "<?php echo base_url(); ?>donor_darah/AksiInsertDonor",
            data    : data,
            success : function(response){

                Swal.fire({
                    title: "Success!",
                    text: "Anda Sudah Mengisi, Form Donor!",
                    icon: "success"
                }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed || result.isDismissed) {
                        // Redirect to a new page
                        window.location.href = "<?php echo base_url(); ?>donor_darah/index";
                    }
                });
            },
            error   : function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
    });

</script>




<!-- autocomplete -->
<script>
  $(document).ready(function()
  {
    $("#noktp").autocomplete({
        source : "<?php echo site_url('donor_darah/get_autocompletes') ?>",

        select: function(event, ui){

            $('[name="noktp"]').val(ui.item.nama);
            $('[name="nama_lengkap"]').val(ui.item.nama);
            $('[name="tgl_lahir"]').val(ui.item.tgl);
            $('[name="jenis_kelamin"]').val(ui.item.jk);
            $('[name="email"]').val(ui.item.mail);
            $('[name="alamat_rumah"]').val(ui.item.alamat);
            $('[name="no_telepon"]').val(ui.item.no_hp);
            $('[name="pekerjaan"]').val(ui.item.kerja);
            $('[name="tempat_lahir"]').val(ui.item.tempatlahir);
            $('[name="umur"]').val(ui.item.umur);
            
        }
    });
});
</script>

<script>
const password = document.getElementById('password'); // id dari input password
const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

password.type = 'password'; // set type input password menjadi password
showHide.innerHTML = '<i class="bi bi-eye"></i>'; // masukan icon eye dalam icon bootstrap 5
showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
// jadi ketika span di hover maka cursornya berubah pointer

showHide.addEventListener('click', () => {
// ketika span diclick
if (password.type === 'password') {
        // jika type inputnya password
        password.type = 'text'; // ubah type menjadi text
        showHide.innerHTML = '<i class="bi bi-eye-slash"></i>'; // ubah icon menjadi eye slash
    } else {
        // jika type bukan password (text)
        showHide.innerHTML = '<i class="bi bi-eye"></i>'; // ubah icon menjadi eye
        password.type = 'password'; // ubah type menjadi password
    }
});
</script>


</body>

</html>
