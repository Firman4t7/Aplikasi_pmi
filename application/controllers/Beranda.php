<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ketersediaan');
		$this->load->model('M_jadwal');
		$this->load->model('M_jumbotron');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['tampil'] = $this->M_ketersediaan->getGroupData();
		
		$data['jadwal'] = $this->M_jadwal->getDataJadwal();


		$data['jumbotron'] = $this->M_jumbotron->getDataJumboId();
		



		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/home', $data);
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/front/Beranda.php */