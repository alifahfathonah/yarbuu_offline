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
                                <h5 class="card-title">Log Video Download</h5>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
												<th>Class</th>
												<th>Subject</th>
												<th>Learning Material</th>    
												<th>Status</th>	
                                                <th>Timestamp</th>												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                     
                                            $i = 1; 
                                            foreach ($get_all_log_video_download as $s){                       
                                            ?>
                                              <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $s->nama; ?></td>
												<td><?php echo $s->kelas; ?></td>
												<td><?php echo $s->nama_pelajaran; ?></td>
												<td><?php echo $s->materi; ?></td>	
												<td><?php echo $s->status; ?></td>	
												<td><?php echo $s->timestamp; ?></td>																								
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
			