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
                              <h3>Login to Course Engine</h3>
                                <p>Enter your username and password to log on:</p>
                            </div>
                           <!--  <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div> -->
                            </div>
                            <div class="form-bottom">
                              <form role="form" action="<?php echo base_url();?>Pages/login_validation/" method="post" class="login-form">
                                <div class="form-group">
                                  <label class="sr-only" for="form-email">Email</label>
                                    <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                  </div>
                                  <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                  </div>

                                  <a class="pull-right" href="http://bootsnipp.com/password">Forgot password?</a>
                                  <div class="checkbox" style="width:140px;">
                                      <label><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>
                                  </div>

                                  <button type="submit" class="btn">Sign in!</button>
                                  <?php echo validation_errors();?>

                              </form>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                          <h3 class="text-center"><a href="<?php echo base_url();?>Pages/signup">Register for an account?</a></p>
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