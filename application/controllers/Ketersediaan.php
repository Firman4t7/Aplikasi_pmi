<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketersediaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ketersediaan');
		$this->load->model('front/M_datapendonor');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		$tampilData = $this->M_ketersediaan->getDataKetersediaan();

		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/ket_darah', $data);
		
	}


	public function aksiInsertKet()
	{

		$gol_darah = $this->input->post('golongan_darah');
		$stok_darah = $this->input->post('stok_darah');
		$update_time = $this->input->post('update_time');
		$update_by = $this->input->post('update_by');

		$data = array(
			'golongan_darah' => $gol_darah,
			'stok_darah' => $stok_darah,
			'update_time' => $update_time,
			'update_by' => $update_by
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


		$data = array(
			'golongan_darah' => $gol_darah,
			'stok_darah' => $stok_darah,
			'update_time' => $update_time,
			'update_by' => $update_by
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

}

/* End of file Ketersediaan.php */
/* Location: ./application/controllers/Ketersediaan.php */