<?php

class Model_kelolaBarang extends CI_Model {

	public function tampilDetail() {

		$data = $this->db->query('SELECT * FROM (
  SELECT * FROM barang ORDER BY id_barang DESC LIMIT 8
) as r ORDER BY id_barang');
		
		return $data->result_array();	

	}

	public function getDataBarang($tabel) { // mengambil data barang di database


    	return $this->db->select('*')->get_where($tabel);
  	}



}
?>