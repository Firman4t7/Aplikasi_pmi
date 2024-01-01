<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketersediaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ketersediaan');
		$this->load->model('M_golongan');
		$this->load->model('front/M_datapendonor');
		$this->load->model('M_jadwal');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		// ketersediaan
		$tampilData = $this->M_ketersediaan->getDataKetersediaan();

		$data = array('tampil' => $tampilData);

		$data['golongan'] = $this->M_golongan->getDataGolongan();

		$data['jadwal'] = $this->M_jadwal->getDataJadwal();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/ket_darah', $data);

	}


	public function aksiInsertKet()
	{
		$gol_darah = $this->input->post('golongan_darah');
		$stok_darah = $this->input->post('stok_darah');
		$update_time = $this->input->post('update_time');
		$update_by = $this->input->post('update_by');
		$uptd = $this->input->post('instansi');

		$data = array(
			'golongan_darah' => $gol_darah,
			'stok_darah' => $stok_darah,
			'update_time' => $update_time,
			'update_by' => $update_by,
			'jadwal_kegiatan' => $uptd
		);

		
		// simpan data
		$save = $this->M_ketersediaan->inputKet($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('Ketersediaan');
	}


	public function form_edit_ket($id)
	{
		$editkets = $this->M_ketersediaan->getTampilket($id);

		$data = array('keterangan' => $editkets);

		$data['golongan'] = $this->M_golongan->getDataGolongan();
		$data['jadwal'] = $this->M_jadwal->getDataJadwal();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/edit_ket_darah', $data);

	}

	public function aksiUpdateKet()
	{
		$id = $this->input->post('id');
		$gol_darah = $this->input->post('golongan_darah');
		$stok_darah = $this->input->post('stok_darah');
		$update_time = $this->input->post('update_time');
		$update_by = $this->input->post('update_by');
		$instansi = $this->input->post('instansi');

		$data = array(
			'golongan_darah' => $gol_darah,
			'stok_darah' => $stok_darah,
			'update_time' => $update_time,
			'update_by' => $update_by,
			'jadwal_kegiatan' => $instansi
		);	


		//print_r($data);
		$update = $this->M_ketersediaan->updateKeter($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('Ketersediaan');

	}

	public function aksiHapusKet($id) {

		$this->M_ketersediaan->deleteKet($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Ketersediaan');
	}


	public function datapendonor()
	{
		$data['data_pendonor'] = $this->M_datapendonor->getDataDonor();


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/data_pendonor_darah', $data);
	}


	public function Create_datapendonor()
	{

		$data['tampil_user'] = $this->M_ketersediaan->get_user();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/create_datapendonor', $data);
	}


	public function formedit_datapendonor($id)
	{	

		$editpen = $this->M_datapendonor->getTampilDon($id);

		$data = array('pendonor' => $editpen);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/edit_pendonor', $data);
	}

	public function aksiUpdateDon()
	{
		$id = $this->input->post('id');
		$no_kartu = $this->input->post('no_kartudonor');
		$alamat_kantor = $this->input->post('alamat_kantor');
		$no_telepon_kantor = $this->input->post('no_telepon_kantor');
		$golongan_darah = $this->input->post('golongan_darah');
		$penghargaan_diterima = $this->input->post('penghargaan_diterima');
		$bersedia_donor_puasa = $this->input->post('bersedia_donor_puasa');
		$bersedia_donor_diluar_rutin = $this->input->post('bersedia_donor_diluar_rutin');
		$donor_terakhir = $this->input->post('donor_terakhir');
		$donor_keberapa = $this->input->post('donor_keberapa');


		$data = array(
			'no_kartudonor' => $no_kartu,
			'alamat_kantor' => $alamat_kantor,
			'no_telepon_kantor' => $no_telepon_kantor,
			'golongan_darah' => $golongan_darah,
			'penghargaan_diterima' => $penghargaan_diterima,
			'bersedia_donor_puasa' => $bersedia_donor_puasa,
			'bersedia_donor_diluar_rutin' => $bersedia_donor_diluar_rutin,
			'donor_terakhir' => $donor_terakhir,
			'donor_keberapa' => $donor_keberapa
		);	

		//print_r($data);
		$update = $this->M_datapendonor->updateDon($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('Ketersediaan/datapendonor');
	}



	public function aksiHapusDon($id) {

		$this->M_datapendonor->deleteDon($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Ketersediaan/datapendonor');
	}


	public function form_admin_donor()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/form_admin_donor', $data);
	}


	public function aksiInsertDonor()
	{
		$email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$no_kartudonor = $this->input->post('no_kartudonor');
		$golongan_darah = $this->input->post('golongan_darah');
		$email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$no_kartudonor = $this->input->post('no_kartudonor');
		$golongan_darah = $this->input->post('golongan_darah');
		$email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');
		$no_kartudonor = $this->input->post('no_kartudonor');
		$golongan_darah = $this->input->post('golongan_darah');
		$no_kartudonor = $this->input->post('no_kartudonor');
		$golongan_darah = $this->input->post('golongan_darah');


		$data = array(
			'golongan_darah' => $gol_darah,
			'stok_darah' => $stok_darah,
			'update_time' => $update_time,
			'update_by' => $update_by,
			'jadwal_kegiatan' => $uptd
		);

		
		// simpan data
		$save = $this->M_ketersediaan->inputKet($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('Ketersediaan');
	}

}

/* End of file Ketersediaan.php */
/* Location: ./application/controllers/Ketersediaan.php */