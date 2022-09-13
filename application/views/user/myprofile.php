


<body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/)">

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                     <h4 class="page-title"><font color="white">Students Details:</h4></font>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('user/register/0');?>"></a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Designation</th>
                                        <th>Qualification</th>
                                        <th>Photo</th>                                        
                                        <th>Department</th>
                                        <th>gender</th>                                    
                                        									
										<!-- <th class="text-right">Action</th> -->
									</tr>
								</thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($result as $row) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $count; ?></td>                                           
                                            <td><?php echo $row->fname; ?></td>
                                            <td><?php echo $row->lname; ?></td>
                                            <td><?php echo $row->address; ?></td>
                                            <td><?php echo $row->mobileno; ?></td>
                                            <td><?php echo $row->email; ?></td> 
                                            <td><?php echo $row->password; ?></td>
                                            <td><?php echo $row->designation; ?></td> 
                                            <td><?php echo $row->qualification; ?></td>                                            
                                            <td><img src="<?php echo base_url('studregisterpics/'.$row->id.'.png'); ?>"
                                             style="height:40px; width:60px;" /></td>                                           
                                            <td><?php echo $row->department; ?></td>                                            
                                            <td><?php echo $row->gender; ?></td>                                           
                                        </tr>
                                        <?php ++$count;
                                        }?>
                                </tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
           
		</div>
</body>