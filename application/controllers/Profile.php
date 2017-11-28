<?php

class Profile extends CI_Controller{

public function index(){
		//$id=$this->session->userdata('id_user');
		//$data = $this->Model_futsal->tampil_profil($id);
		$this->load->view('Profile'
		//, array('data' => $data)
		);	
	}

}

?>