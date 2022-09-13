<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dreamguys.co.in/preclinic/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 05:11:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/kpclogo.jpg">
    <title>Karmayogi Polytechnic College ,Shelve-Pandharpur</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>



<!-- <body class="col-md-12" style="background-image: url(<?php echo base_url();?>assets/college/images/college1.jpg)">
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <div class="container">
                        <form action="<?php echo base_url();?>" class="form-signin" method="post">
                        
                            <div class="account-logo">
                                <a href="index.html"><img src="<?php echo base_url();?>assets/img/kpclogo.jpg" alt=""></a>
                            </div>
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" autofocus="" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="pass" class="form-control"required>
                            </div>
                            
                            <div class="form-group text-center">
                                <!-- <button type="submit" class="btn btn-primary account-btn">Login</button> -->
                                <button type="submit"class="btn btn-primary account-btn">Login</button>
                            </div>
                        </div>  
                        </form>
                </div>
			</div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
 

 <body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/1.jpg)">
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="<?php echo base_url('admin/checkLogin');?>" class="form-signin" method="post">
                        <?php 
                        
                            if($this->session->flashdata('Failure'))
                            {?>
                                <div class="alert alert-danger" align="center">
                                    <?php echo $this->session->flashdata('Failure');?>
                                </div>
                           <?php }
                        ?>
                        
                        <div class="account-logo">
                            <a href="index.html"><img src="<?php echo base_url();?>assets/img/kpclogo.jpg" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" autofocus="" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="pass" class="form-control"required>
                        </div>
                        
                        <div class="form-group text-center">
                            <!-- <button type="submit" class="btn btn-primary account-btn">Login</button> -->
                            <button type="submit"class="btn btn-primary account-btn">Login</button>
                        </div>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>

<!-- Mirrored from dreamguys.co.in/preclinic/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 05:11:21 GMT -->
</html>