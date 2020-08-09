<?php                     
    $i = 1; 
    foreach ($get_motivation as $s){                       
?>
	<div class="card-motivation">
	  <div class="container-card">
		<h4><b><?php echo $s->isi_motivasi; ?></b></h4>
		<p> ~ <?php echo $s->pengarang; ?> ~ </p>		
	  </div>
	</div>
<?php } ; ?>

<div class="card-motivation">
	  <div class="container-card">
		<h4><b>Sapalah Guru ketika bertemu dijalan</b></h4>
		<p>Menyapa minimal dengan senyuman atau klakson ketika di motor, atau yang terbaik adalah dengan mengucap Assalamualaikum</p>		
	  </div>
	</div>


 
