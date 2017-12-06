<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home_User extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		if($this->session->userdata('isAdmin')==TRUE) { // >>>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA MEMBUKA HALAMAN HOME_USER <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('home_admin/readDataAdmin');
		}
		
		$this->load->model('Model_futsal');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_user');	
	}

	public function User()
	{
		if($this->session->userdata('isAdmin')==FALSE)
		{
			redirect('home_user/readDataUser');
		}else{
			redirect('login');}
	}

	public function readDataUser() {
        //$data=$this->Model_futsal->getDataAdmin('user','','')->result_array();
        //$kirim['data']  = $data;
        //$this->load->view('home_admin', $kirim);
        $this->load->view('home_user');
  	}




} ?>