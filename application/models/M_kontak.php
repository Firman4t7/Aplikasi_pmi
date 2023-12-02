<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {


	public function inputkontak($data) {

		return $this->db->insert('kontak', $data);

	}

}

/* End of file M_kontak.php */
/* Location: ./application/models/M_kontak.php */