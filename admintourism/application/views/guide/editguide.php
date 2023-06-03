 <div class="clearfix"></div>
        <div class="row" style="margin-left:450px; margin-top:90px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Guide---||</h4>
   <br>
   <br>
              <form enctype="multipart/form-data" action="<?php echo site_url();?>/guidecontroller/update/<?php echo $data->GID ?>" method="post">
               <div class="form-group">
                  <label for="emailAddress">AID<span class="text-danger">*</span></label>
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
                  <label for="userName">Gname<span class="text-danger">*</span></label>
                  <input type="text" name="gn"  required
                                                   placeholder="Enter guide name" class="form-control" id="userName" value="<?php echo $data->Gname ?>">
                </div>
                <div class="form-group">
                  <label for="emailAddress">Gemail<span class="text-danger">*</span></label>
                  <input type="text" name="ge"  required
                                                   placeholder="Enter guide email" class="form-control" id="emailAddress" value="<?php echo $data->Gemail ?>">
                </div>
                <div class="form-group">
                  <label for="pass1">Gphone<span class="text-danger">*</span></label>
                  <input id="pass1" type="text" name="gp" placeholder=" enter guide phone no" required
                                                   class="form-control" value="<?php echo $data->Gphone ?>">
                </div>
                <div class="form-group">
                  <label for="passWord2">Gimage <span class="text-danger">*</span></label>
                  <input  name="gimg" type="file"/></div>
                     <div><img src="<?php echo base_url();?>/guideimage/<?php echo $data->Gimage ?>"  width="470" height="80" />
                </div>
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
