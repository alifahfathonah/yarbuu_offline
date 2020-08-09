<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('OperatorModel');
	}

	public function index(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Dashboard";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/welcome'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
		
	// SUBJECTS -- SUBJECTS //

	public function subjects(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Subject";
			$data['get_all_subject'] = $this->OperatorModel->get_subject()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/subject'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function add_subject(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Add Subject";			
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/add_subject'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}

	public function edit_subject($id_subject = null) {
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Edit Subject";
			$subject = $this->OperatorModel->get_where_subject($id_subject);
			$data['id_pelajaran'] = $subject->id_pelajaran;
			$data['nama_pelajaran'] = $subject->nama_pelajaran;			
							
			
			$this->load->view('operator/template/header', $data);
			$this->load->view('operator/edit_subject');
			$this->load->view('operator/template/footer');
		} else {
			redirect('auth');
		};
	}

	public function proccess_add_subject(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$nama_input = $this->input->post('nama_pelajaran');
						
			$data = array(
				'nama_pelajaran' => $this->input->post('nama_pelajaran')				
			);

			$nama = $this->OperatorModel->check_subject($nama_input); // Panggil fungsi get yang ada di UserModel.php
		 
			if(empty($nama)){ // Jika hasilnya kosong / user tidak ditemukan	
				
				$this->OperatorModel->add_subject($data);			
				redirect('operator/subjects');
				
			} else {
				
				redirect('operator/subject');
				
			};

		} else {
			redirect('auth/operator');
		};
	}
	
	public function proccess_edit_subject(){
		if ($this->session->userdata('tipe')== 'operator') {
						
			$id_pelajaran = $this->input->post('id_pelajaran');
			$nama_pelajaran = $this->input->post('nama_pelajaran');			

			$data = array(
				'nama_pelajaran' => $nama_pelajaran
			);	 			
		 
			$this->OperatorModel->update_subject($data, $id_pelajaran);
			redirect('operator/subjects');
			
		} else {
			redirect('auth');
		};	
	}

	public function delete_subject($id_subject){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->delete_subject($id_subject) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/subjects');
			
		} else {
			
			redirect('auth');
		};	
	}

	// CLASSES -- CLASSES //

	public function classes(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Classes";
			$data['get_all_classes'] = $this->OperatorModel->get_class()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/class'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function add_class(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Add Class";			
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/add_class'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}

	public function edit_class($id_class = null) {
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Edit Class";
			$class = $this->OperatorModel->get_where_class($id_class);
			$data['id_kelas'] = $class->id_kelas;
			$data['nama_kelas'] = $class->nama_kelas;									
			
			$this->load->view('operator/template/header', $data);
			$this->load->view('operator/edit_class');
			$this->load->view('operator/template/footer');
		} else {
			redirect('auth');
		};
	}

	public function proccess_add_class(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$nama_input = $this->input->post('nama_kelas');
						
			$data = array(
				'nama_kelas' => $this->input->post('nama_kelas')				
			);

			$nama = $this->OperatorModel->check_class($nama_input); // Panggil fungsi get yang ada di UserModel.php
		 
			if(empty($nama)){ // Jika hasilnya kosong / user tidak ditemukan	
				
				$this->OperatorModel->add_class($data);			
				redirect('operator/classes');
				
			} else {
				
				redirect('operator/classes');
				
			};

		} else {
			redirect('auth/operator');
		};
	}
	
	public function proccess_edit_class(){
		if ($this->session->userdata('tipe')== 'operator') {
						
			$id_kelas = $this->input->post('id_kelas');
			$nama_kelas = $this->input->post('nama_kelas');			

			$data = array(
				'nama_kelas' => $nama_kelas
			);	 			
		 
			$this->OperatorModel->update_class($data, $id_kelas);
			redirect('operator/classes');
			
		} else {
			redirect('auth');
		};	
	}

	public function delete_class($id_class){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->delete_class($id_class) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/classes');
			
		} else {
			
			redirect('auth');
		};	
	}
	
	// STUDENTS -- STUDENTS //

	public function students(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Students";
			$data['get_all_student'] = $this->OperatorModel->get_student()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/student'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function add_student(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Add Student";
			$data['get_all_class'] = $this->OperatorModel->get_class()->result();			
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/add_student'); // Load view login.php
			$this->load->view('operator/template/footer'); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}

	public function edit_student($id_student = null) {
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Edit Student";
			$data['get_all_class'] = $this->OperatorModel->get_class()->result();
			$student = $this->OperatorModel->get_where_student($id_student);
			$data['id_admin_sekolah'] = $student->id_admin_sekolah;
			$data['nama'] = $student->nama;
			$data['nisn'] = $student->nisn;
			$data['password'] = $student->password;
			$data['nis'] = $student->nis;	
			$data['kelas'] = $student->kelas;
			$data['gender'] = $student->gender;
			$data['bahasa'] = $student->bahasa;
			
			$this->load->view('operator/template/header', $data);
			$this->load->view('operator/edit_student');
			$this->load->view('operator/template/footer');
		} else {
			redirect('auth');
		};
	}

	public function proccess_add_student(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$nama_input = $this->input->post('nama');
						
			$data = array(
				'nama' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),	
				'password' => $this->input->post('password'),
				'nis' => $this->input->post('nis'),
				'kelas' => $this->input->post('kelas'),
				'gender' => $this->input->post('gender'),
				'bahasa' => $this->input->post('bahasa')
			);

			$nama = $this->OperatorModel->check_student($nama_input); // Panggil fungsi get yang ada di UserModel.php
		 
			if(empty($nama)){ // Jika hasilnya kosong / user tidak ditemukan	
				
				$this->OperatorModel->add_student($data);			
				redirect('operator/students');
				
			} else {
				
				redirect('operator/students');
				
			};

		} else {
			redirect('auth/operator');
		};
	}
	
	public function proccess_edit_student(){
		if ($this->session->userdata('tipe')== 'operator') {
						
			$id_admin_sekolah = $this->input->post('id_admin_sekolah');			

			$data = array(
				'nama' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),	
				'password' => $this->input->post('password'),
				'nis' => $this->input->post('nis'),
				'kelas' => $this->input->post('kelas'),
				'gender' => $this->input->post('gender'),
				'bahasa' => $this->input->post('bahasa')
			);	 			
		 
			$this->OperatorModel->update_student($data, $id_admin_sekolah);
			redirect('operator/students');
			
		} else {
			redirect('auth');
		};	
	}

	public function delete_student($id_student){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->delete_student($id_student) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/students');
			
		} else {
			
			redirect('auth');
		};	
	}
	
	public function import_student(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Import Student";			
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/import_student'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function upload_student(){
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('operator/students');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'nisn' => $row['A'],
                                    'nis'      => $row['B'],
                                    'nama'      => $row['C'],
									'password'      => $row['D'],
									'tingkat'      => $row['E'],
									'gender'      => $row['F'],
									'kelas'      => $row['G'],
									'bahasa'	=> $row['H']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('akun', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('operator/students');

        }
    }
			
	public function print_class(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Print Class";	
			$data['get_all_classes'] = $this->OperatorModel->get_class()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/print_class'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function print_student($nama_kelas){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Print Student";	
			$data['get_student'] = $this->OperatorModel->get_where_siswa_kelas($nama_kelas);	
			$this->load->view('operator/print_student', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function video_download(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Log Video Download";
			$data['get_all_log_video_download'] = $this->OperatorModel->get_all_log_video_download()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/log_download'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function log_student(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Log Student";
			$data['get_all_log_student'] = $this->OperatorModel->get_all_log_student()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/log_student'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	// VIDEO -- VIDEO //

	public function learning_material(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "LEARNING MATERIAL";
			$data['get_video'] = $this->OperatorModel->get_video()->result();
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/learning_material'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function import_learning_material(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "Import Learning Material";			
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/import_learning_material'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};
	}
	
	public function upload_learning_material(){
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('operator/learning_material');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'file' => $row['A'],
                                    'materi'      => $row['B'],
                                    'tingkat'      => $row['C'],
									'nama_pelajaran'      => $row['D'],
									'tipe'      => $row['E']									
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('video', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('operator/learning_material');

        }
    }
	
	// BACKUP AND RESTORE DATABASE --- BACKUP AND RESTORE DATABASE //
	
	public function backup_and_restore_database(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['title'] = "BACKUP AND RESTORE DATABASE";
				
			$this->load->view('operator/template/header', $data);
			$this->load->view('operator/backup_and_restore_database');
			$this->load->view('operator/template/footer');
			
		} else {
			
			redirect('auth');
		};	
	}
	
	public function proccess_backup_database(){
		if ($this->session->userdata('tipe')== 'operator') {
			// Load the DB utility class
			$this->load->dbutil();

			$prefs = array(
        'format'     => 'txt',
        // gzip, zip, txt format filenya
        'filename'   => 'yarbuu_online.sql',
        // Nama file
        'add_drop'   => TRUE, 
        // Untuk menambahkan drop table di backup
        'add_insert' => TRUE,
        // Untuk menambahkan data insert di file backup
        'newline'    => "\n"
        // Baris baru yang digunakan dalam file backup
		);

		$backup = $this->dbutil->backup($prefs);

			// Load file helper dan menulis ke server untuk keperluan restore
			$this->load->helper('file');
			write_file('/assets/back/operator/backup/yarbuu_online.sql', $backup);

			// Load the download helper dan melalukan download ke komputer
			$this->load->helper('download');
			force_download('yarbuu_online.sql', $backup);
			
		} else {
			
			redirect('auth');
		};	
	}
}
