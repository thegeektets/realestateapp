<!DOCTYPE html>
  <?php $this->load->helper('url') ;?>
<html>
<head>
    <title>
      se7en | Real Estate Agency
    </title>
  
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/bootstrap.min.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/font-awesome.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/se7en-font.css")?>" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/stylesheets/style.css")?>" media="all" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url("assets/jquery/jquery-1.10.2.min.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/jquery/ui/1.10.3/jquery-ui.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/javascripts/bootstrap.min.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("javascripts/modernizr.custom.js")?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/javascripts/main.js")?>" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
  <body class="login2">
    <!-- Signup Screen -->
    <div class="login-wrapper">
      <a href="index-2.html"><img width="100" height="30" src="images/logo-login%402x.png" /></a>
           <?php 
      //error_reporting(0);
   
      echo $success  ?>
     
      <?php echo form_open ("admin/login"); ?>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span><input class="form-control" type="text" 
            placeholder="Enter your admin username" name="adminusername" required="true">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" type="password"
             placeholder="Select a password" name ="adminpassword" required ="true">
          </div>
        </div>
       <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
      
        </div>
            </form>
    </div>
    <!-- End Signup Screen -->
  </body>

</html>