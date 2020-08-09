<p><i class="fas fa-user"></i> Nama : <?php echo $this->session->userdata('nama'); ?></p>

<br>

<p><i class="fas fa-home"></i> Kelas : <?php echo $this->session->userdata('kelas'); ?></p>

<hr>
<a class="button-red" href="<?php echo base_url();?>index.php/auth/logout_siswa">KELUAR</a>

