<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ketersediaan extends CI_Model {
	
	public function getDataKetersediaan() {
		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputKet($data) {

		return $this->db->insert('ketersediaan_darah', $data);

	}

	public function getTampilket($id) {
		$this->db->where('id_ket', $id);
		$query = $this->db->get('ketersediaan_darah');
		return $query->row();
	}

	public function updateKeter($data, $id) {

		$this->db->where('id_ket', $id);
		$this->db->update('ketersediaan_darah', $data);

	}

	public function deleteKet($id)
	{
		$this->db->where('id_ket', $id);
		$this->db->delete('ketersediaan_darah');
	}

	public function getGroupData()
	{
		// $this->db->select('golongan_darah, SUM(stok_darah) as stok_darah', FALSE);
		// $this->db->from('ketersediaan_darah');
		// $this->db->group_by('golongan_darah');
		// $this->db->order_by('golongan_darah', 'ASC'); 
		// return $result = $this->db->get()->result();


		$this->db->select('golongan_darah, SUM(stok_darah) as stok_darah', FALSE);
		$this->db->from('ketersediaan_darah');
		$this->db->group_by('golongan_darah');
		$this->db->order_by('id_ket', 'ASC'); // Menambahkan pengurutan berdasarkan abjad (ascending)
		return $result = $this->db->get()->result();


	}



}

/* End of file M_ketersediaan.php */
/* Location: ./application/models/M_ketersediaan.php */