 <div class="clearfix"></div>
        <div class="row" style="margin-left:450px; margin-top:90px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Hotel---||</h4>
   <br>
   <br>
              <form enctype="multipart/form-data" action="<?php echo site_url();?>/hotelcontroller/update/<?php echo $data->Hotelid ?>" method="post">
                
                <div class="form-group">
                  <label for="userName">AID<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="ai" >
                  
                  <?php
				  	foreach ($said as $row)
					{
						if ($row->AID==$data->AID)
						{
				  ?>
                  <option value="<?php echo $row->AID ?>" selected="selected"><?php echo $row->Atitle ?></option>
                  
                  <?php
						}
						else
						{
						?>
                        <option value="<?php echo $row->AID ?>"><?php echo $row->Atitle ?></option>
					<?php
					}
                    }
					?>
                  </select>
                  <br />
                  </div>
                <div class="form-group">
                  <label for="userName">SID<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="si" >
                  
                  <?php
				  	foreach ($ssid as $row)
					{
						if ($row->SID==$data->SID)
						{
				  ?>
                  <option value="<?php echo $row->SID ?>" selected="selected" ><?php echo $row->SPtitle ?></option>
                  
                  <?php
						}
						else
						{
						?>
                        <option value="<?php echo $row->SID ?>"><?php echo $row->SPtitle ?></option>
					<?php
					}
				  	}
					?>
                  </select>
                  <br />
                  
                </div>
                
                
                <div class="form-group">
                  <label for="userName">Hotelname<span class="text-danger">*</span></label>
                  <input type="text" name="hn"  required
                                                   placeholder="Enter hotel name" class="form-control" id="userName" value="<?php echo $data->Hotelname ?>" >
                </div>
                <div class="form-group">
                  <label for="emailAddress">Hotelimg<span class="text-danger">*</span></label>
                  <input type="file" name="himg" ></div>
                 <div class="form-group">
                 <img src="<?php echo base_url();?>/hotelimage/<?php echo $data->Hotelimg ?>"  width="470" height="80"/></div>
                
                <div class="form-group">
                  <div class="checkbox checkbox-purple">
                    <input id="checkbox6a" type="checkbox">
                    <label for="checkbox6a"> Remember me </label>
                  </div>
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Submit </button>
                  <button type="reset" class="btn btn-default waves-effect m-l-5"> Cancel </button>
                </div>
              </form>
            </div>
            <!-- end card-box --> 
          </div>
          <!-- end col -->
          
         <!-- jQuery  --> 
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
