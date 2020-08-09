        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                
					<div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
							
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/operator/proccess_edit_learning_material">
                                <div class="card-body">
                                    <h4 class="card-title">Edit <?php echo $materi; ?></h4>
										<div class="row">
											<div class="col-md-6">
												<label id="materi" class="m-t-15">Learning Material</label>
												<div class="input-group">
													<input type="text" class="form-control" value="<?php echo $materi; ?>" id="materi" name="materi" placeholder="Name">
												</div>												
												
												
												
											</div>
											<div class="col-md-6">
												<label id="youtube" class="m-t-15">Link Youtube</label>
												<div class="input-group">
													<input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $youtube; ?>" placeholder="Link Youtube">
												</div>
												
												<input type="hidden" name="id_belajar_online" value="<?php echo $id_belajar_online; ?>"> 	
											</div>
											<div class="col-md-12">
												<br>
												<br>
												<input type="submit" class="btn btn-info" value="SUBMIT">
											</div>											
										</div>
                                </div>                                
                            </form>                                                    

                            </div>
                        </div>
                      </div>
				
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->