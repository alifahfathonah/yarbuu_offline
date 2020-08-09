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
							
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/operator/proccess_edit_student">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Student</h4>
										<div class="row">
											<div class="col-md-6">
												<label id="name" class="m-t-15">Name</label>
												<div class="input-group">
													<input type="text" class="form-control" id="name" value="<?php echo $nama; ?>" name="nama" placeholder="Name">
												</div>
												
												<label id="username" class="m-t-15">Username/NISN</label>
												<div class="input-group">
													<input type="text" class="form-control" id="username" value="<?php echo $nisn; ?>" name="nisn" placeholder="Username/NISN">
												</div>
												
												<label id="password" class="m-t-15">Password</label>
												<div class="input-group">
													<input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
												</div>
												
												
											</div>
											<div class="col-md-6">
												<label id="nis" class="m-t-15">NIS</label>
												<div class="input-group">
													<input type="text" class="form-control" id="nis" value="<?php echo $nis; ?>" name="nis" placeholder="NIS">
												</div>
												
												<label id="class" class="m-t-15">Class</label>
												<div class="input-group">
													<select name="kelas" class="select2 form-control m-t-15" style="height: 36px;width: 100%;">
														<option value="">-- PLEASE CHOOSE CLASS --</option>
														<?php                     
														$i = 1; 
														foreach ($get_all_class as $s){                       
														?>
														  <option value="<?php echo $s->nama_kelas; ?>"><?php echo $s->nama_kelas; ?></option>                     
																								 
														<?php } ; ?>
														
													</select>
												</div>
												
												<label id="gender" class="m-t-15">Gender</label>
												<div class="input-group">
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" id="customControlValidation1" name="gender" value="1">
														<label class="custom-control-label" for="customControlValidation1">Man </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" id="customControlValidation2" name="gender" value="2" checked>
														<label class="custom-control-label" for="customControlValidation2">Woman</label>
													</div>											 
												</div> 
												
												<label id="bahasa" class="m-t-15">Language</label>
												<div class="input-group">
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" id="customControlValidation3" name="bahasa" value="en" checked>
														<label class="custom-control-label" for="customControlValidation3">English </label>
													</div>
													<div class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" id="customControlValidation4" name="bahasa" value="id">
														<label class="custom-control-label" for="customControlValidation4">Indonesian</label>
													</div>											 
												</div> 	
											</div>
											<div class="col-md-12">
												<br>
												<input type="hidden" name="id_admin_sekolah" value="<?php echo $id_admin_sekolah; ?>">
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
			