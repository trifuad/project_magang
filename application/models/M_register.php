<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	public function register($nama, $nama_media,$no_hp,$password) {
		$this->db->select('*');
		$this->db->from('register_epress');
		$this->db->where('nama', $nama);
        $this->db->where('nama_media', $nama_media);
        $this->db->where('no_hp', $no_hp);
		
		$this->db->where('password', md5($password));

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */