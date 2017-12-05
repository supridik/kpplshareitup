<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		
		
		$this->load->model('Model_futsal');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		$this->load->view('Home');	
	}

	function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('Home'));
    }



} ?>