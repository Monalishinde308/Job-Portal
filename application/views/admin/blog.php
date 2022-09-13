<body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/1.jpg)">

    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title"><font color="Black">Student</h4></font>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/saveblog');?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="Black">Name<span class="text-danger"></span></label></font>
                                    <input class="form-control"value="<?php echo ($id == 0 ? "" : $data->name); ?>" type="text" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">        
                            <div class="col-sm-6">
								<div class="form-group">
									<label><font color="Black">Image</label></font>
									<div class="profile-upload">
										<div class="upload-img">
											<img alt="" src="<?php echo base_url();?>assets/img/user.jpg">
										</div>
										<div class="upload-input">
											<input type="file" name="pic" id="pic" class="form-control">
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="Black">Designation<span class="text-danger"></span></label></font>                                    
                                        <input class="form-control" type="text"name="designation" id="designation"value="<?php echo ($id == 0 ? "" : $data->designation); ?>" required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="Black">Qualification<span class="text-danger"></span></label></font>
                                    <input class="form-control" type="text"name="qualification" id="qualification"value="<?php echo ($id == 0 ? "" : $data->qualification); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="Black">Departments<span class="text-danger"></span></label></font>
                                    <select name="dept_name" id="dept_name" single="single" value="<?php echo ($id == 0 ? "" : $data->dept_name); ?>">
                                        <option value="Automobile Engineering">Automobile Engineering</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Computer Technology">Computer Technology</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="E & TC Department">E & TC Department</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>


                                    </select>
                                </div>
                            </div>    
                        </div>
                        <div class="m-t-20 text-left">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>


<!-- Mirrored from dreamguys.co.in/preclinic/template/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 05:12:50 GMT -->
</html>
