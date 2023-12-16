<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('front/M_login_user');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/login_user', $data);
	}

	public function aksi_login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->M_login_user->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'name' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			echo "<script>
			alert('Anda Berhasil Login!');
			window.location='" . site_url('donor_darah') . "'
			</script>";

		}else{

			echo "<script>
			alert('username dan Password Salah!');
			window.location='" . site_url('auth_login') . "'
			</script>";
		}

	}

	public function logout_user(){
		$this->session->unset_userdata('nama'); 
		$this->session->sess_destroy();
		redirect(base_url('auth_login'));
	}

}

/* End of file Auth_login.php */
/* Location: ./application/controllers/front/Auth_login.php */
