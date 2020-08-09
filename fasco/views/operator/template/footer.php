<footer class="footer text-center">
                Admin Template by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel </a> | Yarbuu by IT Team <a href="http://smpmuh-cimanggu.sch.id/">Junior High School of Muhammadiyah Cimanggu</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/back/operator/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/back/operator/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/back/operator/dist/js/custom.min.js"></script>
        <!-- this page js -->
    
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/extra-libs/DataTables/datatables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/select2/dist/js/select2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/back/operator/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
	
		CKEDITOR.replace( 'editor1' );
		
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
		
		jQuery('#datepicker-autoclose2').datepicker({
            autoclose: true,
            todayHighlight: true
        });
		
		$(document).ready(function(){
			$("select").change(function(){
				$(this).find("option:selected").each(function(){
					var optionValue = $(this).attr("value");
					if(optionValue){
						$(".box").not("." + optionValue).hide();
						$("." + optionValue).show();
					} else {
						$(".box").hide();
					}
				});
			}).change();
		});
		
		
    </script>

</body>

</html>