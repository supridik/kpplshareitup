<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

function __construct(){
		parent::__construct();		
		 if(!$this->session->userdata('username'))
			redirect('');
		
		$this->load->model('Model_futsal');
	}


public function index(){

		// $data = $this->Model_futsal->tampil_lapangan();
		$this->load->view('Home');	
	}

	function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('Home'));
    }



} ?>