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
                                <h5 class="card-title">Student <a class="btn btn-success float-md-right float-ls-right float-xl-right" href="<?php echo base_url(); ?>index.php/operator/add_student"><i class="mdi mdi-plus"></i> Add New Student</a> <p class="float-md-right float-ls-right float-xl-right" style="margin: 0 5px; color: white"> | </p> <a class="btn btn-success float-md-right float-ls-right float-xl-right" href="<?php echo base_url(); ?>index.php/operator/import_student"><i class="mdi mdi-plus"></i> Import New Student</a></h5>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Class</th>
												<th>Username</th>
                                                <th>Password</th>
												<th>Gender</th>												
												<th>Language</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                     
                                            $i = 1; 
                                            foreach ($get_all_student as $s){                       
                                            ?>
                                              <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $s->nama; ?></td> 
												<td><?php echo $s->kelas; ?></td> 
                                                <td><?php echo $s->nisn; ?></td>  
                                                <td><?php echo $s->password; ?></td>  
                                                <td><?php echo $s->gender; ?></td> 
                                                <td><?php echo $s->bahasa; ?></td>
												<td><a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>index.php/operator/edit_student/<?php echo $s->id_admin_sekolah; ?>"><i class="mdi mdi-pencil"></i> Edit</a> | <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>index.php/operator/delete_student/<?php echo $s->id_admin_sekolah; ?>"><i class="mdi mdi-close-outline"></i> Delete</a></td>
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
			