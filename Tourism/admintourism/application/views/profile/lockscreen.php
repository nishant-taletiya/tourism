<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Lock screen</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta content="SRGIT" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">

<!-- page css -->
<link href="<?php echo base_url() ?>plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/css/default.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>
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
              <div class="text-center account-logo-box">
                 <a href="index.html" class="text-success"> <span><img src="<?php echo base_url() ?>assets/images/logo_dark.png" alt=""class="dark-logo"></span> </a> 
                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>--> 
              </div>
              <div class="account-content">
                <div class="text-center m-b-20">
                  <div class="m-b-20"> <img src="<?php echo base_url() ?>assets/images/users/avatar-11.jpg" class="img-circle img-thumbnail thumb-lg" alt="thumbnail"> </div>
                  <p class="text-muted m-b-0 font-13"><?php echo $c; ?></p>
                </div>
                <form class="form-horizontal" action="<?php echo site_url() ?>/logincontroller/checklsp" method="post">
                  <div class="form-group m-b-25">
                    <div class="col-xs-12">
                      <label for="password">Password</label>
                      <input class="form-control" type="password" name="pass" required id="password" placeholder="Enter your password">
                    </div>
                  </div>
                  <div class="form-group text-center m-t-10">
                    <div class="col-xs-12">
                      <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Log In</button>
                    </div>
                  </div>
                </form>
                <div class="clearfix"></div>
                <div class="row m-t-50">
                  <div class="col-sm-12 text-center">
                    <p class="text-muted">Not you? return<a href="page-login.html" class="text-dark m-l-5"><b>Sign In</b></a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end card-box--> 
            
          </div>
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

<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/waves.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script> 
<script src="<?php echo base_url() ?>plugins/bootstrap-select/js/bootstrap-select.min.js" ></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>
</body>

<!-- Mirrored from www.creativethemes.co.in/demo/admin-template/admin/page-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2018 06:02:26 GMT -->
</html>