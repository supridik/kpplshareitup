<?php

	class Register extends CI_Controller{

		public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_futsal');
		}

		public function index() {
			$this->load->view('Register');

		}

		public function tambahuser() { // Input data register ke database
			$username = $this->input->post('username');
      		$password  = $this->input->post('password');
      		$sha1 = sha1($password);
      		$nama = $this->input->post('nama');
      		$kodepos = $this->input->post('kodepos');
      		$alamat = $this->input->post('alamat');
      		$kecamatan = $this->input->post('kecamatan');
      		$kelurahan = $this->input->post('kelurahan');
      		$data = array (
            	 'deskripsi'=> 'User',
            	 'username' => $username,
             	 'password'  => $sha1,
                 'nama_user'=> $nama,
             	 'kode_pos' => $kodepos,
              	 'alamat'  => $alamat,
             	 'kecamatan'=> $kecamatan,
             	 'kelurahan'=> $kelurahan
        	);  
        	$this->Model_futsal->input_data($data,'user');
			
			echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
		}

	}

?>