<?php

class Model_futsal extends CI_Model {

	function cek_login($username, $sha1) {
		$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('username', $username);
    	$this->db->where('password', $sha1);
    

    	$query = $this->db->get();

	    if ($query->num_rows() == 1) {
     		return true;
    	}
    	else{
     		return false;
    	}
	}
/*function tampil_lapangan(){
		$query = $this->db->get('lapangan');
		return $query->result_array();
	} */
	
	// function tampil_bayar(){
	// 	$query2 = $this->db->get('transaksi');
	// 	return $query2->result_array();
	// }

	function tampil_profil($id){
		//$this->db->where('id_user',$id);

		$data = $this->db->query('select * from user where id_user='.$id);
		return $data->result_array();

	}
 
/*	function input_data($data,$table){
	 	$this->db->insert($table,$data);
	 }
	 function edit_data($where, $table) {
     return $this->db->get_where($table,$where);
   }*/

   public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}
 //  function hapus_data($where,$table){
 //    $this->db->where($where);
 //    $this->db->delete($table);
 //  }
}
?>
