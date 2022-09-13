 <!-- HOME -->
 <section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url(<?php echo base_url();?>assets/college/images/1.jpg)" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Our Blog</h1> 
            </div>
          </div>
        </div>
      </div>
    </section>

   <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">

           <?php
                                    $count = 1;
                                    foreach ($result as $row)
                                     {
                                        ?>
               <div class="col-lg-3 col-sm-6">
                   <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="<?php echo base_url('blogpics/'.$row->id.'.png'); ?>"  height="200" width="200" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="#"><h6><?php echo $row->name; ?></h6></a>
                            <span><?php echo $row->designation; ?></span>
                            <span>( <?php echo $row->qualification; ?> )</span>
                        </div>
                    </div> <!-- singel teachers -->
               </div>

               <?php ++$count;
                                        }?>
              

           </div> <!-- row -->
           
        </div> <!-- container -->
    </section>