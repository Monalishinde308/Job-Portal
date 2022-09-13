<!-- HOME -->
<section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url(<?php echo base_url();?>assets/college/images/hero_1.jpg);" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Contact Us</h1>              
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section" id="next-section">
      <div class="container">
         <div class="row">
            <div class="contact-from">
                <div class="section-title">
                    <h5>Contact Us</h5>
                    <h2>Keep in touch</h2>
                </div>        
            <div class="main-form pt-45">
            <form  action="<?php echo base_url('admin/savecontact');?>" method="post" data-toggle="validator">
                <div class="row form-group">                
                    <div class="col-md-6">
                        <div class="singel-form form-group">
                            <input name="name" type="text" placeholder="Your name" size="50" data-error="Name is required." required="required">
                        </div>
                    </div>
                  </div>                     

                <div class="row form-group">    
                    <div class="col-md-6">
                      <div class="singel-form form-group">
                        <input name="email" type="email" placeholder="Email" size="50" data-error="Valid email is required." required="required">
                      </div>
                    </div>
                  </div>  
                  
                  <div class="row form-group">        
                    <div class="col-md-12">  
                        <div class="singel-form form-group">                
                          <input name="subject" type="text" placeholder="Subject" size="50" data-error="Subject is required." required="required">
                        </div>
                    </div>
                  </div>   
                          
                  
                  <div class="row form-group">    
                    <div class="col-md-12">
                      <div class="singel-form form-group">
                          <input name="phone" type="text" placeholder="Phone"  size="50" data-error="Phone is required." required="required">
                      </div>
                    </div>
                  </div>
        
                 
                  <div class="row form-group">
                    <div class="col-md-12">     
                      <div class="singel-form form-group">             
                        <textarea name="message" placeholder="Messege"  rows="5" cols="52" data-error="Please,leave us a message." required="required"></textarea>
                      </div>
                    </div>
                  </div>
        
                  <p class="form-message"></p>
                      <div class="col-md-12">
                          <div class="singel-form">
                            <button type="submit" name="submit" value="Submit" class="main-btn">Submit</button>
                          </div> <!-- singel form -->
                      </div>     
                </form>
              </div>
              </div>

          
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Karmayogi Polytechnic college Shelve, Pandharpur.</p>
    
              <p class="mb-0 font-weight-bold">Phone of TPO</p>
              <p class="mb-4"><a href="#">9860305918</a></p>
    
              <p class="mb-0 font-weight-bold">Email Address of TPO</p>
              <p class="mb-0"><a href="#">macvin7@gmail.com</a></p>
    
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="map map-big">
    <div class="col-md-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.0290297341844!2d75.23783641385654!3d17.743271287866275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc41149e422fe3d%3A0x3c59a8a21cc00d9c!2sKarmayogi+polytechnic+College!5e0!3m2!1sen!2sin!4v1560610832125!5m2!1sen!2sin" width="1500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>                                </div>
    </div> 
    </div>