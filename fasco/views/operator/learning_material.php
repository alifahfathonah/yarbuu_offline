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
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Learning Material <a class="btn btn-success float-md-right float-ls-right float-xl-right" href="<?php echo base_url(); ?>index.php/operator/import_learning_material"><i class="mdi mdi-plus"></i> Import New Learning Material</a></h5>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Learning Material</th>
                                                <th>Subject</th>
												<th>Class</th>
												<th>Tipe</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                     
                                            $i = 1; 
                                            foreach ($get_video as $s){                       
                                            ?>
                                              <tr>
                                                <td><?php echo $i++; ?></td>   												  
                                                <td><?php echo $s->materi; ?></td>
                                                <td><?php echo $s->nama_pelajaran; ?></td>
												<td><?php echo $s->tingkat; ?></td>
												<td><?php echo $s->tipe; ?></td>
												<td><a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>assets/file/video/<?php echo $s->file; ?>"><i class="mdi mdi-play"></i> SHOW VIDEO</a></td>
                                              </tr>                                       
                                            <?php } ; ?>                                          
                                        </tbody>                                        
                                    </table>
                                </div>

                            </div>
                        </div>      
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
			