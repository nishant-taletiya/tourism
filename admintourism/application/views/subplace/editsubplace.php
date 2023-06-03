<div class="col-lg-4"  style="margin-left:550px; margin-top:60px;">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Subplace---||</h4>
              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/subplacecontroller/update/<?php echo $data->SID ?>" method="post">
              <div class="form-group">
              
                  <label for="userName">Place id<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="pid" >
                  <?php
				  	foreach ($spid as $row)
					{
				  if($row->PID==$data->PID)
			  {
          ?>
                  <option value="<?php echo $row->PID ?>" selected="selected" ><?php echo $row->Pname ?></option>
                  <?php
			  }
			  else
			  {
				  ?>
				  <option value="<?php echo $row->PID ?>"><?php echo $row->Pname ?></option>
				<?php
                }
					}
					?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="userName">Sub place title<span class="text-danger">*</span></label>
                  <input type="text" name="nick" required="" placeholder="Sub place title" class="form-control" id="userName" value="<?php echo $data->SPtitle ?>" >
                </div>
                
                
                
                
                <h5>Sub place description</h5>
                <div class="form-group">
                	<textarea name="email" class="form-control"><?php echo $data->SPdescription ?></textarea>
                </div>
                
                
                
                
                
                
                <div class="form-group">
                  <label for="pass1">Sub place image<span class="text-danger">*</span></label>
                  <input id="pass1" type="file" name="image" >
                  <div align="center"><img src="<?php echo base_url();?>/subplaceimage/<?php echo $data->SPimage ?>"  width="150" height="150"/></div>
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Submit </button>
                  <a href="<?php echo site_url() ?>/subplacecontroller/showsubplace" class="btn btn-default waves-effect m-l-5"> Cancel </a>
                </div>
              </form>
            </div>
            <!-- end card-box --> 
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
