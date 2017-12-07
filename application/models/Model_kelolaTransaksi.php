<?php

class Model_kelolaTransaksi extends CI_Model {

	public function tampilDetail() {

		$data=$this->db->select('*')->from('barang');
		
		return $data->get()->result_array();	

	}

	public function getDataTransaksi($tabel) { // mengambil data transaksi barang di database
    	return $this->db->select('*')->get_where($tabel);
  	}

}
?>