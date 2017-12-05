<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_futsal');
		$this->load->helper('url');
		$this->load->library('session');
                //$this->load->library('encryption');
	}

	public function index(){
		$this->load->view('Login');	
	}

	public function aksi_login(){
		$user_login=array(
			'username'=>$this->input->post('username'),
			'password'=>sha1($this->input->post('password'))
 		);
		
		$data=$this->Model_futsal->login_user($user_login['username'],$user_login['password']);

		if($data){
	    	$this->session->set_userdata('id_user',$data['id_user']);
        	$this->session->set_userdata('nama_user',$data['nama_user']);
        	$this->session->set_userdata('alamat',$data['alamat']);
        	$this->session->set_userdata('kecamatan',$data['kecamatan']);
        	$this->session->set_userdata('kelurahan',$data['kelurahan']);
        	$this->session->set_userdata('kode_pos',$data['kode_pos']);
        	$this->session->set_userdata('foto_profil',$data['foto_profil']);
        	$this->session->set_userdata('foto_ktp',$data['foto_ktp']);
        	$this->session->set_userdata('deskripsi',$data['deskripsi']);
        	$this->session->set_userdata('username',$data['username']);
        	$this->session->set_userdata('isAdmin',$data['isAdmin']);
	    	redirect('Login/loginUser');
	    	//$this->load->view('Home');
        }	else{
                	$message = "Username / Password salah";
					echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('')."';</script>";
	  		//$this->load->view('Home');
		}
	}

	public function loginUser()
	{
		if($this->session->userdata('username'))
		{
			redirect('Login/readDataUser');
		}else{
			redirect('Login/login');}}

    public function login()
	{
		if($this->session->userdata('username')){
			redirect('Login/admin');
		}else{
			$message = "Username / Password Salah";
			echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('')."';</script>";
		}
	}

	public function logout()
	{
//		if($this->session->userdata('username'))
		{
			$this->session->sess_destroy();
                redirect('');}}
        
	

	public function komentar()
	{
		if($this->session->userdata('username'))
		{
			redirect('Login/readDataUser');
		}else{
			redirect('Login/login');}}
            

	public function admin()
	{
		if($this->session->userdata('username'))
		{
            redirect('Login/komentar');
		}else{
            redirect('Login/login');}}

	
	public function readDataUser() {
	    //$this->load->view('Komentar', array('data' => $this->My_Model->getDataKomentar()));
//            $data = $this->My_Model->getDataKomentar();
//            $this->load->view('Komentar', array('data' => $data)); 
            //$data=$this->My_Model->getDataKomentar('komentar','','')->result_array();
            //-$kirim['data']  = $data;

			$message = "Anda berhasil login";
			echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('home')."';</script>";
			//redirect('home');
            $this->load->view('Home');
  	}
}

?>