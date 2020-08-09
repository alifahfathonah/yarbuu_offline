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
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/operator/upload_student">
                                <div class="card-body">
                                    <h4 class="card-title">Import Student</h4>
										<div class="row">
											<div class="col-md-6">

												<label id="name" class="m-t-15">Upload XLSX File</label>
												<div class="form-group">
													<input type="file" name="userfile" class="form-control">
												</div>
												<input type="submit" class="btn btn-info" value="SUBMIT">
											</div>
											<div class="col-md-6">
												<br>
												<br>													
												
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
			