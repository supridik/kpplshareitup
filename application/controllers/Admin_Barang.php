<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_Barang extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		if($this->session->userdata('isAdmin')==FALSE) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA MEMBUKA HALAMAN HOME_ADMIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('Home_user');
		}
		
		$this->load->model('Model_kelolaBarang');
	}


	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
		//$this->load->view('home_admin');
		
		$data=$this->Model_kelolaBarang->getDataBarang('barang','','')->result_array();
        $kirim['data']  = $data;

		$this->load->view('Admin_Barang', $kirim);
		
		// $now = new DateTime();
		// $now->setTimezone(new DateTimezone('Asia/Jakarta'));
	}





} ?>