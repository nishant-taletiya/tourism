<div class="col-lg-6"  style="margin-left:450px; margin-top:90px;">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Attraction---||</h4>

              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/attractioncontroller/update/<?php echo $data->AID ?>" method="post">
              <div class="form-group">
                  <label for="userName">Place id<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="pid" >
                  
                  <?php
            foreach ($spid as $row)
          {
			  if($row->PID==$data->PID)
			  {
          ?>
                  <option value="<?php echo $row->PID ?>" selected="selected"><?php echo $row->Pname ?></option>
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
                  <br />
                  <label for="userName">Sub place id<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="sid" >
                  
                  <?php
            foreach ($sspid as $row)
          {
          	if($row->SID==$data->SID)
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
                </div>
                <div class="form-group">
                  <label for="userName">Attraction title<span class="text-danger"></span></label>
                  <input type="text" name="nick" required="" placeholder="Attraction title" class="form-control" id="userName" value="<?php echo $data->Atitle ?>">
                </div>
                <div class="form-group">
                  
                  <h5>Description</h5>
                <div>
                	<textarea name="email" class="form-control"><?php echo $data->Adescription ?></textarea>
                </div>
                </div>
                <div class="form-group">
                  <label for="pass1">Attraction image<span class="text-danger"></span></label>
                  <input type="file" placeholder="Attraction image" name="image" >
                <div><img src="<?php echo base_url();?>/attractionimage/<?php echo $data->Aimage ?>"  width="100" height="100" /></div>
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Update </button>
                  <a href="<?php echo site_url() ?>/attractioncontroller/showattraction" class="btn btn-default waves-effect m-l-5"> Cancel </a>
                </div>
              </form>
            </div>
            <!-- end card-box --> 
          </div><script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/waves.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script> 

<!-- Parsley js --> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.min.js"></script> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.custom.js"></script> 

<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>
