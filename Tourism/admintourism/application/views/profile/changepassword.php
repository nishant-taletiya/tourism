<div class="content-page"> 
    <!-- Start content --> 
    <!-- content -->
    <div class="content">
      <div class="container">
        <div id="page-title"> </div>
 <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0">Change Password</h4>
                <br>
                <br>
              
              <form method="post" action="<?php echo site_url() ?>/logincontroller/checkpassword" >
                <div class="form-group">
                  <label for="hori-pass1" class="col-sm-4 form-control-label">Old Password<span class="text-danger"></span></label>
                  <div class="col-sm-7">
                    <input type="text" name="oldpassword" placeholder="Old Password" required class="form-control" />
                  </div>
				  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <label for="hori-pass1" class="col-sm-4 form-control-label">New Password<span class="text-danger"></span></label>
                  <div class="col-sm-7">
                    <input id="hori-pass1" type="password" name="newpassword" placeholder="New password" required
                                                       class="form-control">
                  </div>
				   <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <label for="hori-pass2" class="col-sm-4 form-control-label">Confirm Password <span class="text-danger"></span></label>
                  <div class="col-sm-7">
                    <input data-parsley-equalto="#hori-pass1" type="password" name="retypepassword" required
                                                       placeholder="Retype password" class="form-control" id="hori-pass2">
                  </div>
				   <div class="clearfix"></div>
                </div>

                </div>
                <div class="form-group">
				   <div class="clearfix"></div>
                </div>
                <div class="form-group m-b-0">
                  <div class="col-sm-8 col-sm-offset-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light"> Change password </button>
<br /> <?php echo $c; ?>
                  </div>
				   <div class="clearfix"></div>
                </div>
              </form>
              <div class="visible-lg h-79"></div>
            </div>
          </div>
				   <div class="clearfix"></div>
                </div>
              </form>
            </center>
              <div class="visible-lg h-79"></div>
            </div>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/waves.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script> 

<!-- Parsley js --> 
<script  src="<?php echo base_url() ?>plugins/parsleyjs/parsley.min.js"></script> 
<script  src="<?php echo base_url() ?>plugins/parsleyjs/parsley.custom.js"></script> 

<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script> 
