<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		if($this->session->userdata('isAdmin')==TRUE) { // >>>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA MEMBUKA HALAMAN HOME_USER <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home_admin/readDataAdmin');
		}
		
		$this->load->model('Model_futsal');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		$this->load->view('Home');	
		// if($this->session->userdata('isAdmin')==FALSE)
		// {
		// 	redirect('Home');
		// }else{
		// 	redirect('login');}
	}





} ?>