


<body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/hero_1.jpg)">

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                     <h4 class="page-title"><font color="white">Job Details:</h4></font>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('admin/post/0');?>"></a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead> 
									<tr>
                                        <th>No</th>
                                        <th>Company Name</th>                                       
                                        <th>Qualification</th>
                                        <th>Location</th>                                        
                                        <th>Decription</th>
                                        <th>Registration Link</th>
                                        <th>Department Name</th>
                                        									
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
                                            <td><?php echo $row->name; ?></td>                                                                                   
                                            <td><?php echo $row->qualification; ?></td>                                         
                                            <td><?php echo $row->location; ?></td>                                            
                                            <td><?php echo $row->description; ?></td>   
                                           
                                            <td class="text-center" style="width:100px;">
                                                <a href="<?php echo (''.$row->link); ?>"
                                                title="click to edit">Link for Register</a>&nbsp;     
                                            </td>
                                            <td><?php echo $row->department; ?></td>     

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