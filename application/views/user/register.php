
<body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/hero_1.jpg)">

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">
                    <h4 class="page-title"><font color="white">Student Registration Form</h4></font>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('user/saveregister');?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><font color="white">First Name<span class="text-danger"></span></font></label>
                                <input class="form-control" type="text" value="<?php echo ($id == 0 ? "" : $data->fname); ?>" name="fname" id="fname" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><font color="white">Last Name<span class="text-danger"></span></font></label>
                                <input class="form-control" type="text" value="<?php echo ($id == 0 ? "" : $data->lname); ?>" name="lname" id="lname" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="white">Address<span class="text-danger"></span></font></label>
                                    <input class="form-control" type="text"name="address" value="<?php echo ($id == 0 ? "" : $data->address); ?>" id="address" required>
                                </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><font color="white">Mobile No<span class="text-danger"></span></font></label>                                    
                                    <input class="form-control" type="number" value="<?php echo ($id == 0 ? "" : $data->mobileno); ?>" name="mobileno" id="mobileno" required>                                    
                            </div>
                        </div>                           
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="white">Email ID <span class="text-danger">*</span></font></label>
                                    <input class="form-control" type="email" value="<?php echo ($id == 0 ? "" : $data->email); ?>" name="email" id="email" required>
                                </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="white">Password <span class="text-danger">*</span></font></label>
                                    <input class="form-control" type="password" name="password" value="<?php echo ($id == 0 ? "" : $data->password); ?>" id="password"  required>
                                </div>
                        </div>                            
                    </div>
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><font color="white">Designation<span class="text-danger"></span></font></label>                                    
                                            <input class="form-control" type="text" value="<?php echo ($id == 0 ? "" : $data->designation); ?>" name="designation" id="designation" required>                                    
                                    </div>
                            </div>                                   
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="white">Qualification<span class="text-danger"></span></font></label>                                    
                                        <input class="form-control" type="text"name="qualification" value="<?php echo ($id == 0 ? "" : $data->qualification); ?>" id="qualification" required>                                    
                                </div>
                            </div>                                 
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label><font color="white">Photo</font></label>
                                    <div class="profile-upload">
                                        <div class="upload-img">
                                            <img alt="" src="<?php echo base_url();?>assets/img/user.jpg">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" name="photo" value="<?php echo ($id == 0 ? "" : $data->photo); ?>"  id="photo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div> 
                        <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label"><font color="white">Gender:</label></font>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="Male" class="form-check-input" <?php echo ($id == 0 ? "" : ($data->gender=="Male" ? "checked" : "")); ?>checked><font color="white">Male</font>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="Female" class="form-check-input" <?php echo ($id == 0 ? "" :($data->gender=="Female"?"checked":"")); ?>><font color="white">Female</font>
                                        </label>
                                    </div>
                                </div>
                        </div>                            
                    </div>  
                    <div class="row"> 
                        <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><font color="white">Departments<span class="text-danger"></span></font></label>
                                        <select name="department" id="department" value="<?php echo ($id == 0 ? "" : $data->department); ?>" single="single">
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

                    <div class="container">  
                        <div class="m-t-20 text-left">
                            <button class="btn btn-primary submit-btn">Register</button>
                        </div>
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
