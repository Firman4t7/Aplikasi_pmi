<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapendonor extends CI_Model {

	public function getDataDonor() {

		$this->db->select('*');
		$this->db->from('form_pendonor');
		$this->db->join('user', 'form_pendonor.user_id = user.username');
		$query = $this->db->get();
		return $query->result();

	}


	public function cari_data_pendonor($golongan_darah, $umur, $jenis_kelamin) {

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.umur', $umur);
		$this->db->where('user.jenis_kelamin', $jenis_kelamin);
		$this->db->join('form_pendonor', 'form_pendonor.user_id = user.username');
		$this->db->where('form_pendonor.golongan_darah', $golongan_darah); 
		$query = $this->db->get();


		return $query->result();
	}

}

/* End of file M_datapendonor.php */
/* Location: ./application/models/front/M_datapendonor.php */