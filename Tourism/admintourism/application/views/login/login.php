<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>Admin Panel | Login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta content="SRGIT" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">

<!-- page css -->
<link href="<?php echo base_url();?>plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/default.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
</head>
<body class="bg-accpunt-pages">
<!-- Begin page --> 

<!-- HOME -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wrapper-page">
          <div class="account-pages">
            <div class="account-box">
              <div class="account-logo-box">
                 <a href="index.html" class="text-success"> <span><img src="<?php echo base_url()?>assets/images/logo_dark.png" alt=""class="dark-logo"></span> </a> 
                <h5 class="text-uppercase font-bold m-b-5 m-t-50">Sign In</h5>
                <p class="m-b-0"><?php echo $data;?></p>
              </div>
              <div class="account-content">
                <form class="form-horizontal" action="<?php echo site_url()?>/logincontroller/login" method="post" >
                  <div class="form-group m-b-20">
                    <div class="col-xs-12">
                      <label for="emailaddress">Email address</label>
                      <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="john@deo.com">
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <div class="col-xs-12"> <a href="<?php echo site_url() ?>/profilecontroller/fp" class="text-muted pull-right"><small>Forgot your password?</small></a>
                      <label for="password">Password</label>
                      <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password">
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <div class="col-xs-12">
                      <div class="checkbox checkbox-success">
                        <input id="remember" type="checkbox" checked="">
                        <label for="remember"> Remember me </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center m-t-10">
                    <div class="col-xs-12">
                      <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                    </div>
                  </div>
                </form>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="text-center">
                      <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light"> <i class="fa fa-facebook"></i> </button>
                      <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light"> <i class="fa fa-google"></i> </button>
                      <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light"> <i class="fa fa-twitter"></i> </button>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- end card-box--> 
          
        </div>
        <!-- end wrapper --> 
        
      </div>
    </div>
  </div>
</section>
<!-- END HOME --> 

<!-- ============================================================== --> 
<!-- End Right content here --> 
<!-- ============================================================== --> 

<!-- END wrapper --> 

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" ><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- jQuery  --> 

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/waves.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script> 
<script src="<?php echo base_url();?>plugins/bootstrap-select/js/bootstrap-select.min.js" ></script> 
<script src="<?php echo base_url();?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
</body>

</html>