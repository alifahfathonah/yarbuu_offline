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
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
							<a href="<?php echo base_url(); ?>index.php/operator/subjects">
								<div class="box bg-cyan text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-clipboard-text"></i></h1>
									<h6 class="text-white">Subjects</h6>
								</div>
							</a>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url(); ?>index.php/operator/students">
							<div class="card card-hover">						
								<div class="box bg-success text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-contacts"></i></h1>
									<h6 class="text-white">Students</h6>
								</div>						
							</div>
						</a>
                    </div>					
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
						<a href="<?php echo base_url(); ?>index.php/operator/classes">
							<div class="card card-hover">
								<div class="box bg-warning text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-home"></i></h1>
									<h6 class="text-white">Classes</h6>
								</div>
							</div>
						</a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url(); ?>index.php/operator/learning_material">
							<div class="card card-hover">
								<div class="box bg-danger text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-play"></i></h1>
									<h6 class="text-white">Video</h6>
								</div>
							</div>
						</a>
                    </div>
                    <!-- Column -->
					<div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url(); ?>index.php/operator/backup_and_restore_database">
							<div class="card card-hover">
								<div class="box bg-success text-center">
									<h1 class="font-light text-white"><i class="mdi mdi-database"></i></h1>
									<h6 class="text-white">Database</h6>
								</div>
							</div>
						</a>
                    </div>
                    <!-- Column -->	
                    
                </div>


                <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> . : : - - - : : .</h5>
                            <div class="row">
                                <h2>Assalamualaikum, <?php echo $this->session->userdata('nama'); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
			