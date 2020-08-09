<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OperatorModel extends CI_Model {
    
    
	// SISWA ------------ SISWA //
	public function get_siswa(){        
        $result = $this->db->get('akun'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_siswa($id_siswa){
        $this->db->where('id_admin_sekolah', $id_siswa); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('akun')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function get_where_siswa_kelas($nama_kelas){
        $this->db->where('kelas', $nama_kelas); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('akun')->result(); // Untuk mengeksekusi dan mengambil data hasil query		
		
		//$result = $this->db->query("SELECT * FROM siswa WHERE kelas = ".$nama_kelas."");
        return $result;
    }
	
	public function tambah_siswa($data) {
		$this->db->insert('akun', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_siswa($data, $id_siswa){
		$this->db->update('akun', $data, array('id_admin_sekolah' => $id_siswa));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function hapus_siswa($id_siswa) {
		$this->db->delete('akun', array('id_admin_sekolah' => $id_siswa));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	// VIDEO ------------ VIDEO //
	public function get_video(){        
        $result = $this->db->get('video');
		// $result = $this->db->query("SELECT * FROM video");		// Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
		
    // PELAJARAN ------------ PELAJARAN //
	public function get_subject(){        
        $result = $this->db->get('pelajaran'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_subject($id_subject){
        $this->db->where('id_pelajaran', $id_subject); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('pelajaran')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function add_subject($data) {
		$this->db->insert('pelajaran', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_subject($data, $id_pelajaran){       
        return $this->db->update('pelajaran', $data, array('id_pelajaran' => $id_pelajaran));
    }
	
	public function delete_subject($id_subject) {
		$this->db->delete('pelajaran', array('id_pelajaran' => $id_subject));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function check_subject($nama_input){
        $this->db->where('nama_pelajaran', $nama_input); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('pelajaran')->row(); // Untuk mengeksekusi dan mengambil data hasil query				
        return $result;
    }

    // KELAS ------------ KELAS //
	public function get_class(){        
        $result = $this->db->get('kelas'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_class($id_class){
        $this->db->where('id_kelas', $id_class); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('kelas')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function add_class($data) {
		$this->db->insert('kelas', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_class($data, $id_kelas){       
        return $this->db->update('kelas', $data, array('id_kelas' => $id_kelas));
    }

	public function delete_class($id_class) {
		$this->db->delete('kelas', array('id_kelas' => $id_class));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function check_class($nama_input){
        $this->db->where('nama_kelas', $nama_input); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('kelas')->row(); // Untuk mengeksekusi dan mengambil data hasil query				
        return $result;
    }
	
	// SISWA ------------ SISWA //
	public function get_student(){        
        $result = $this->db->get('akun'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_student($id_student){
        $this->db->where('id_admin_sekolah', $id_student); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('akun')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function add_student($data) {
		$this->db->insert('akun', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_student($data, $id_admin_sekolah){       
        return $this->db->update('akun', $data, array('id_admin_sekolah' => $id_admin_sekolah));
    }

	public function delete_student($id_student) {
		$this->db->delete('akun', array('id_admin_sekolah' => $id_student));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function check_student($nama_input){
        $this->db->where('nama', $nama_input); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('akun')->row(); // Untuk mengeksekusi dan mengambil data hasil query				
        return $result;
    }
	// LOG ------------ LOG //
		
	public function get_all_log_student(){        
        //$result = $this->db->get('masuk_web_siswa'); // Untuk mengeksekusi dan mengambil data hasil query
		$result = $this->db->query("SELECT * FROM masuk_web_siswa WHERE tanggal2 = '".date('d/m/Y')."'");
        return $result;
    }
	
	public function get_all_log_video_download(){        
        //$result = $this->db->get('masuk_web_siswa'); // Untuk mengeksekusi dan mengambil data hasil query
		$result = $this->db->query("SELECT a.id_video, a.tanggal, a.id_siswa, a.status, a.timestamp, b.nama, b.kelas, c.file, c.materi, c.nama_pelajaran FROM download_video a LEFT JOIN akun b ON a.id_siswa = b.id_admin_sekolah LEFT JOIN video c ON a.id_video = c.id_video WHERE a.tanggal = '".date('d/m/Y')."'");
        return $result;
    }
		
	// SETTING ------------ SETTING //	
	public function get_setting(){
       $result = $this->db->get('setting'); // Untuk mengeksekusi dan mengambil data hasil query
		return $result;
    }
	
	public function update_setting($data){
		$this->db->update('setting', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
}
