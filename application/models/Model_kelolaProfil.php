<?php

class Model_kelolaProfil extends CI_Model {

	function tampilProfil($id){
			$this->db->where('id_user',$id);
		  $data = $this->db->query('select * from user where id_user='.$id);
		  return $data->result_array();
	}


}
	?>