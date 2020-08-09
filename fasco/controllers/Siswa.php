<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('pdf');
		$this->load->model('SiswaModel');
	}

	public function index(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data['title'] = "Beranda";
			$data['get_motivation'] = $this->SiswaModel->get_motivation()->result();
			$this->load->view('siswa/template/header', $data); // Load view login.php
			$this->load->view('siswa/welcome'); // Load view login.php
			$this->load->view('siswa/template/footer');
		} else {
			redirect('auth');
		};
	}
	
	public function learn(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data['title'] = "Belajar";
			$data['get_video'] = $this->SiswaModel->get_video()->result();
			$this->load->view('siswa/template/header', $data); // Load view login.php
			$this->load->view('siswa/learn'); // Load view login.php
			$this->load->view('siswa/template/footer');
		} else {
			redirect('auth');
		};
	}
	
	public function download(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data = array(
					'id_siswa' => $this->session->userdata('id_siswa'),
					'status' => "Download",
					'tanggal'=> date('d/m/Y'),
					'id_video'=>$this->input->post('id_video')	
			);
			
			$this->db->insert('download_video', $data);
		} else {
			redirect('auth');
		};
	}
	
	public function lihat(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data = array(
					'id_siswa' => $this->session->userdata('id_siswa'),
					'tanggal'=> date('d/m/Y'),
					'status' => "Lihat",
					'id_video'=>$this->input->post('id_video')	
			);
			
			$this->db->insert('download_video', $data);
		} else {
			redirect('auth');
		};
	}
	
	public function profile(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data['title'] = "Profil";
			$this->load->view('siswa/template/header', $data); // Load view login.php
			$this->load->view('siswa/profile'); // Load view login.php
			$this->load->view('siswa/template/footer');
		} else {
			redirect('auth');
		};
	}
}
