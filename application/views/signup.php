   <link rel="stylesheet" href="<?php echo base_url();?>resource/css/form-elements.css">
   <link rel="stylesheet" href="<?php echo base_url();?>resource/css/style.css">
<header>
        <div class="header-content">
      <!-- Top content -->
           
          
              <div class="container">

                  <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Create an account</h3>
                            </div>
                           <!--  <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div> -->
                            </div>
                            <div class="form-bottom">
                              <form role="form" action="<?php echo base_url();?>Pages/signup_validation/" method="post" class="login-form">
                                <div class="form-group">
                                  <label class="sr-only" for="form-name">Name</label>
                                    <input type="text" name="form-name" placeholder="Name..." class="form-name form-control" id="form-name">
                                  </div>
                                  
                                  <div class="form-group">
                                  <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="sr-only" for="form-cpassword">Confirm Password</label>
                                    <input type="password" name="form-cpassword" placeholder="Confirm Password..." class="form-cpassword form-control" id="form-cpassword">
                                  </div>

                            

                                  <button type="submit" class="btn">Sign Up!</button>
                                  <?php echo validation_errors();?>

                              </form>
                        </div>
                        </div>
                    </div>
                </div>


        <!-- Javascript -->
        <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url();?>resource/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

        </div>
</header>