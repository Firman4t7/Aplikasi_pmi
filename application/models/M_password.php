<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_password extends CI_Model {

	// public function update($username,$data,$table)
	// {
 //         //id apa yang mau di update, lalu DATA apa yang mau dikirim ke tabel di database
	// 	$this->db->where('username',$username);
	// 	$this->db->update($table,$data);
	// }

	public function update($username, $data, $table) {
		$this->db->where('username', $username);
		$this->db->update($table, $data);
	}


}

/* End of file M_password.php */
/* Location: ./application/models/M_password.php */