


<body class="single-slider slider-2 bg_cover" style="background-image: url(<?php echo base_url();?>assets/college/images/1.jpg)">

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                     <h4 class="page-title"><font color="#009efb">Students</h4></font>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?php echo base_url('admin/blog/0');?>" class="btn btn btn-primary btn-rounded float-right"> Add student</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Department Name</th>
                                        <th>Designation</th>
                                        <th>Qualification</th>
										
										<th class="text-right">Action</th>
									</tr>
								</thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($result as $row) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $count; ?></td>
                                            <td><img src="<?php echo base_url('blogpics/'.$row->id.'.png'); ?>"
                                        style="height:40px; width:60px;" /></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->dept_name; ?></td> 
                                            <td><?php echo $row->designation; ?></td> 
                                            <td><?php echo $row->qualification; ?></td>
                                            <td class="text-center" style="width:100px;">
                                            <a href="<?php echo base_url('admin/blog/'.$row->id); ?>"
                                                title="click to edit">Edit</a>&nbsp;
                                            <a href="<?php echo base_url('admin/deleteblog/'.$row->id); ?>" style="color:red;"
                                                title="click to delete" onclick="return confirm('Sure to delete?');">Delete</a>
                                        </td>
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