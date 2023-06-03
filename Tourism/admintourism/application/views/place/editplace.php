		<div class="row" style="margin-left:600px; margin-top:70px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Place---||</h4>
              <form enctype="multipart/form-data" action="<?php echo site_url();?>/placecontroller/update/<?php echo $data->PID ?>" method="post">
                <div class="form-group">
                  <label for="userName">Plcae  Name<span class="text-danger"></span></label>
                  <input type="text" name="pc"  required
                                                   placeholder="Enter user name" class="form-control" id="userName" value="<?php echo $data->Pname ?>" >
                </div>
                <div class="form-group">
                  <label for="emailAddress">Title<span class="text-danger"></span></label>
                  <input type="text" name="title"  required
                                                   placeholder="Enter email" class="form-control" id="emailAddress" value="<?php echo $data->Ptitle ?>" >
                </div>
                <div class="form-group">
                  
                  <h5>Description</h5>
                <div>
                	<textarea name="des" class="form-control"><?php echo $data->Pdescription ?></textarea>
                </div>
               
                <div class="form-group">
                  <label for="passWord2">Image <span class="text-danger"></span></label>
                  <input name="img" type="file" class="form-control" >
				<div align="center"> <img src="<?php echo base_url();?>/placeimage/<?php echo $data->Pimage ?>"  width="150" height="150"/> </div>
                </div>
                <div>
                
                </div>
                <div class="form-group">
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Update </button>
                  <a href="<?php echo site_url() ?>/placecontroller/showplace" class="btn btn-default waves-effect m-l-5">Cancel</a>
                </div>
              </form>
            </div>
          </div>	
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/waves.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script> 

<!-- Parsley js --> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.min.js"></script> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.custom.js"></script> 

<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>