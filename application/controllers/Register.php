<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/daftar', $data);
	}

	public function AksiInsertuser()
	{
		$emails = $this->input->post('email');
		$usernames = $this->input->post('username');
		$password = $this->input->post('password');
		$no_ktp = $this->input->post('no_ktp');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat_rumah = $this->input->post('alamat_rumah');
		$no_telepon = $this->input->post('no_telepon');
		$pekerjaan = $this->input->post('pekerjaan');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$umur = $this->input->post('umur');


		$data = array(
			'email' => $emails,
			'username' => $usernames,
			'password' => md5($password),
			'no_ktp' => $no_ktp,
			'nama_lengkap' => $nama_lengkap,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat_rumah' => $alamat_rumah,
			'no_telepon' => $no_telepon,
			'pekerjaan' => $pekerjaan,
			'tempat_lahir' => $tempat_lahir,
			'umur' => $umur
			
		);

		$this->db->insert('user',$data);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/front/Register.php */