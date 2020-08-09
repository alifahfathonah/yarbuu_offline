<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model {
    
	public function get_motivation(){
        // $result = $this->db->get('motivasi'); // Untuk mengeksekusi dan mengambil data hasil query
		$result = $this->db->query("SELECT * FROM motivasi WHERE day = '".date('D')."'");
		return $result;
    }
	
	//LEARNING MATERIAL -------------- LEARNING MATERIAL //
    public function get_video(){
        // $result = $this->db->get('setting'); // Untuk mengeksekusi dan mengambil data hasil query
		$result = $this->db->query("SELECT * FROM video WHERE tingkat = '".$this->session->userdata('tingkat')."' ORDER BY nama_pelajaran DESC");
		return $result;
    }	
	
}
