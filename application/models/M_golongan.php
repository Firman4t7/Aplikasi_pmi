<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_golongan extends CI_Model {


	public function getDataGolongan() {
		$this->db->select('*');
		$this->db->from('gol_darah');
		$query = $this->db->get();
		return $query->result();
	}

	
	public function inputGol($data) {

		return $this->db->insert('gol_darah', $data);

	}
}

/* End of file M_golongan.php */
/* Location: ./application/models/M_golongan.php */