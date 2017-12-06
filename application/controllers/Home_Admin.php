<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home_Admin extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		if($this->session->userdata('isAdmin')==FALSE) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA MEMBUKA HALAMAN HOME_ADMIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('home_user/readDataUser');
		}
		
		$this->load->model('Model_futsal');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_admin');		
	}

	public function Admin()
	{
		if($this->session->userdata('isAdmin')==TRUE)
		{
			redirect('home_admin/readDataAdmin');
		}else{
			redirect('login');}
	}

	public function readDataAdmin() {
	    //$this->load->view('Komentar', array('data' => $this->My_Model->getDataKomentar()));
		//$data = $this->My_Model->getDataKomentar();
		//$this->load->view('Komentar', array('data' => $data));
        $data=$this->Model_futsal->getDataAdmin('user','','')->result_array();
        $kirim['data']  = $data;
        $this->load->view('home_admin', $kirim);
        
  	}




} ?>