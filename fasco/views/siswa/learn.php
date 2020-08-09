<h6><i class="fas fa-play-circle"></i> Semua Video Pembelajaran</h6>
	
<?php                     
    $i = 1; 
    foreach ($get_video as $s){                       
?>
	<div class="card">
	  <img src="<?php echo base_url();?>assets/back/siswa/images/learn.png" alt="Avatar" style="width:100%">
	  <div class="container-card">
		<h4><b><?php echo $s->nama_pelajaran; ?></b></h4>
		<p><?php echo $s->materi; ?></p>
		
		<?php if ($s->tipe == "MP4") { ?>
		<div class="download-materi">
			<div class="item-download-materi" data-id="<?php echo $s->id_video; ?>">
				<a class="button download" href="<?php echo base_url();?>assets/file/video/<?php echo $s->file; ?>" download="<?php echo $s->materi; ?>-<?php echo $s->nama_pelajaran; ?>-<?php echo $s->tingkat; ?>.mp4"><i class="fas fa-download"></i> DOWNLOAD VIDEO</a>
			</div>
			
			<div class="item-download-materi" data-id="<?php echo $s->id_video; ?>">
				<a class="button lihat" href="<?php echo base_url();?>assets/file/video/<?php echo $s->file; ?>"><i class="fas fa-play-circle"></i> LIHAT VIDEO</a>
			</div>
		</div>
		<?php } elseif ($s->tipe == "PDF") { ?>
		<div class="download-materi">
			<div class="item-download-materi" data-id="<?php echo $s->id_video; ?>">
				<a class="button download" href="<?php echo base_url();?>assets/file/pdf/<?php echo $s->file; ?>" download="<?php echo $s->materi; ?>-<?php echo $s->nama_pelajaran; ?>-<?php echo $s->tingkat; ?>.pdf"><i class="fas fa-download"></i> DOWNLOAD PDF</a>
			</div>
			
			<div class="item-download-materi" data-id="<?php echo $s->id_video; ?>">
				<a class="button lihat" href="<?php echo base_url();?>assets/file/pdf/<?php echo $s->file; ?>"><i class="fas fa-file-pdf"></i> LIHAT PDF</a>
			</div>
		</div>	
		<?php }; ?>	
		
	  </div>
	  
	</div>
<?php } ; ?>




