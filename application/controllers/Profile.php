<?php

class Profile extends CI_Controller{

function __construct(){	
		parent::__construct();	
		$this->load->model('Model_kelolaProfil');
	}

public function index(){

		

		$id=$this->session->userdata('id_user');
		$data = $this->Model_kelolaProfil->tampilProfil($id);
		$this->load->view('Profile'
		, array('data' => $data)
		);	
	}

public function edit_profil(){


}


}

?>