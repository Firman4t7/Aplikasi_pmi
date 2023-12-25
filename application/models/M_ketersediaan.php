<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ketersediaan extends CI_Model {
	
	public function getDataKetersediaan() {
		// $this->db->select('*');
		// $this->db->from('ketersediaan_darah');
		// $query = $this->db->get();
		// return $query->result();

		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$query = $this->db->get();
		return $query->result();


	}

	public function inputKet($data) {

		return $this->db->insert('ketersediaan_darah', $data);

	}

	public function getTampilket($id) {

		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->where('ketersediaan_darah.id_ket', $id);
		$query = $this->db->get();
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
// 		$this->db->order_by('id_ket', 'ASC'); // Menambahkan pengurutan berdasarkan abjad (ascending)
// 		return $result = $this->db->get()->result();


		$this->db->select('gol_darah.nama_golongan, gol_darah.wb, gol_darah.prc, gol_darah.tc, gol_darah.belum_serologi, SUM(ketersediaan_darah.stok_darah) as stok_darah', FALSE);
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->group_by('gol_darah.id_gol');
		$this->db->order_by('gol_darah.id_gol', 'ASC'); // Assuming id_gol is the primary key in gol_darah
		$result = $this->db->get()->result();
		return $result;





	}



}

/* End of file M_ketersediaan.php */
/* Location: ./application/models/M_ketersediaan.php */