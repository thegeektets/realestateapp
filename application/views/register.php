<!DOCTYPE html>
<html>
<head>
    <title>
      se7en | Real Estate Agency
    </title>
    <?php $this->load->helper('url') ;?>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/bootstrap.min.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/font-awesome.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/se7en-font.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/style.css")?>" media="all" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url("assets/jquery/jquery-1.10.2.min.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/jquery/ui/1.10.3/jquery-ui.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/javascripts/bootstrap.min.js")?>" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/javascripts/main.js")?>" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
  <body class="login2">
    <!-- Signup Screen -->
    <div class="login-wrapper">
      <a href="index.html"><img width="100" height="30" src="images/logo-login%402x.png" alt="SE7EN" /></a>
       <?php echo form_open("users/register") ?>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span><input class="form-control" type="text" placeholder="fullname"
             name="fullname"value="<?php echo set_value('fullname'); ?>">

                      <?php echo form_error('fullname'); ?>
          </div>
        </div>
         </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-phone"></i></span><input class="form-control" type="text" placeholder="Phonenumber"
             name ="phonenumber" value="<?php echo set_value('phonenumber'); ?>">

                      <?php echo form_error('phonenumber'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i></span><input class="form-control" type="text" placeholder="address" 
            name =value="<?php echo set_value('address'); ?>">

                      <?php echo form_error('address'); ?>
          </div>
        </div>
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span><input class="form-control" type="text" placeholder="Enter your username" 
            name =value="<?php echo set_value('username'); ?>">

                      <?php echo form_error('username'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" type="password" placeholder="Select a password"
             name ="passworc" value="<?php echo set_value('password'); ?>">

                      <?php echo form_error('password'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-ok"></i></span><input class="form-control" type="password" 
            placeholder="Repeat your password" name ="cpassword" value="<?php echo set_value('cpassword'); ?>">

                      <?php echo form_error('cpassword'); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="checkbox text-left"><input type="checkbox"><span>I agree to the terms and conditions.</span></label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign up">
        <p>
          Already have an account?
        </p>
        <a class="btn btn-default-outline btn-block" href="<?php $this->load->helper('url') ; echo base_url("index.php/welcome");?>">Login now</a>
      </form>
    </div>
    <!-- End Signup Screen -->
  </body>

</html>