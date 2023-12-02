<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kontak');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}


	public function index()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/contact', $data);
	}

	public function aksiInsertContact()
	{
		$alamats = $this->input->post('alamat');
		$telp = $this->input->post('telepone');
		

		$data = array(
			'alamat' => $alamats,
			'telepon' => $telp
		);


		// simpan data
		$save = $this->M_kontak->inputkontak($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('kontak');

	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */