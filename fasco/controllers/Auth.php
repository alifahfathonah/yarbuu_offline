<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}
	
	public function operator(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('operator'); // Redirect ke page welcome		
		
		$this->load->view('login_operator'); // Load view login.php
	}
	
	public function siswa(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('siswa'); // Redirect ke page welcome		
		
		$this->load->view('login_siswa'); // Load view login.php
	}

	public function login_siswa(){
		
			
		$nisn = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get_siswa($nisn); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth/siswa'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				
				$session = array(
					'authenticated'=>true, // Buat session authenticated dengan value true					
					'nama'=>$user->nama,					
					'kelas'=>$user->kelas,					
					'nisn'=>$user->nisn,
					'tingkat'=>$user->tingkat,
					'id_siswa' => $user->id_admin_sekolah,					
					'tipe' => "siswa"// Buat session authenticated
				);
				
				$data = array(
					'nama' => $user->nama,
					'kelas'=>$user->kelas,
					'tanggal2'=> date('d/m/Y'),
					'tipe' => 'Masuk',
					'ip' => $_SERVER['REMOTE_ADDR'],
					'agent' => htmlentities($_SERVER['HTTP_USER_AGENT'])	
				);
			
				$this->db->insert('masuk_web_siswa', $data);
				
				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('siswa'); // Redirect ke halaman welcome
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('auth/siswa'); // Redirect ke halaman login
			}
		}
	}
	
	public function login_operator(){
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get_operator($username); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth/operator'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					'authenticated'=>true, // Buat session authenticated dengan value true
					'username'=>$user->username,
					'nama'=>$user->nama,
					'tipe' => "operator"// Buat session authenticated
				);
				
				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('operator'); // Redirect ke halaman welcome
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('auth/operator'); // Redirect ke halaman login
			}
		}
	}
		
	public function logout_siswa(){
		
		$nisn = $this->session->userdata('nisn');
		$user = $this->UserModel->get_siswa($nisn);
		
		$data = array(
					'nama' => $user->nama,
					'kelas'=>$user->kelas,
					'tipe' => 'Keluar',					
					'tanggal2'=> date('d/m/Y'),
					'ip' => $_SERVER['REMOTE_ADDR'] ,
					'agent' => htmlentities($_SERVER['HTTP_USER_AGENT'])	
				);
			
				$this->db->insert('masuk_web_siswa', $data);
				
		$this->session->sess_destroy(); // Hapus semua session
		
		
		
		redirect('auth/siswa'); // Redirect ke halaman login
	}
	
	public function logout(){
			
		$this->session->sess_destroy(); // Hapus semua session			
		redirect('auth/operator'); // Redirect ke halaman login
	}

}
