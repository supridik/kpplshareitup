<?php

class Model_kelolaBarang extends CI_Model {

	public function tampilDetail() {

		$data=$this->db->select('*')->from('barang');
		
		return $data->get()->result_array();	

	}

}
?>