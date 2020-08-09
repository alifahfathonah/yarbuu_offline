</div>
<div class="menu-footer">
	<div class="item-menu-footer">
		<a href="<?php echo base_url();?>index.php/siswa/"><i class="fas fa-home"></i></a>
	</div>
	<div class="item-menu-footer">
		<a href="<?php echo base_url();?>index.php/siswa/learn"><i class="fas fa-play-circle"></i></a>
	</div>
	<div class="item-menu-footer">
		<a href="<?php echo base_url();?>index.php/siswa/profile"><i class="fas fa-user-graduate"></i></a>
	</div>
</div>
<!-- partial -->
  <script src="<?php echo base_url();?>assets/back/siswa/js/jquery.min.js"></script>
  <script  src="<?php echo base_url();?>assets/back/siswa/js/script.js"></script>
	<script>
$('.download').click(function(){

    var video_id = $(this).parent().data('id');

    $.ajax
    ({ 
        url: '<?php echo base_url();?>index.php/siswa/download',
        data: {"id_video": video_id},
        type: 'post',
        success: function(result)
        {
            //
        }
    });
});

$('.lihat').click(function(){

    var video_id = $(this).parent().data('id');

    $.ajax
    ({ 
        url: '<?php echo base_url();?>index.php/siswa/lihat',
        data: {"id_video": video_id},
        type: 'post',
        success: function(result)
        {
            //
        }
    });
});

</script>
</body>
</html>