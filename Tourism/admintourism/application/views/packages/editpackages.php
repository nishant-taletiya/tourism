<div class="col-lg-6"  style="margin-left:450px; margin-top:90px;">
            <div class="card-box">
              <h4 class="header-title m-t-0"><center>||---Update Packages---||</center></h4>
              <br />
              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/packagescontroller/update/<?php echo $data->packageid ?>" method="post">
              <div class="form-group">
                  <label for="userName">Attraction name<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="aid" >
                  <?php
            foreach ($said as $row)
          {
          	if($row->AID==$data->AID)
			  {
          ?>
                  <option value="<?php echo $row->AID ?>" selected="selected" ><?php echo $row->Atitle ?></option>
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
                </div>
                <div class="form-group">
                  <label for="userName">Hotel name<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="hid" >
                  <?php
            foreach ($shid as $row)
          {
			if($row->Hotelid==$data->Hotelid)
			  {
          ?>
                  <option value="<?php echo $row->Hotelid ?>" selected="selected"><?php echo $row->Hotelname ?></option>
                  <?php
			  }
			  else
			  {
				  ?>
				  <option value="<?php echo $row->Hotelid ?>"><?php echo $row->Hotelname ?></option>
				<?php
                }
          }
          ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="userName">Guide name<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="gid" >
                  <?php
            foreach ($sgid as $row)
          {
          	if($row->GID==$data->GID)
			  {
          ?>
                  <option value="<?php echo $row->GID ?>" selected="selected" ><?php echo $row->Gname ?></option>
                  <?php
			  }
			  else
			  {
				  ?>
				  <option value="<?php echo $row->GID ?>"><?php echo $row->Gname ?></option>
				<?php
                }
          }
          ?>
                  </select>
                </div>
              <div class="form-group">
                  <label for="userName">Package name<span class="text-danger">*</span></label>
                  <input type="text" name="pname" required="" placeholder="Package name" class="form-control" id="userName" value="<?php echo $data->Packagename ?>" >
                </div>  
              <div class="form-group">
                  <label for="userName">Price<span class="text-danger">*</span></label>
                  <input type="text" name="price" required="" placeholder="Price" class="form-control" id="userName" value="<?php echo $data->Price ?>" >
                </div>
              
              <h5><font color="black">Description</font></h5>
                <div class="form-group">
                	<textarea name="description" class="form-control"><?php echo $data->Description ?></textarea>
                </div>
                <div class="form-group">
                  <label for="userName">Package date<span class="text-danger">*</span></label>
                  <input type="text" name="pdate" required="" placeholder="Package date" class="form-control" id="userName" value="<?php echo $data->Pdate ?>" >
                </div>
                <div class="form-group">
                  <label for="emailAddress">Timespend<span class="text-danger">*</span></label>
                  <input type="text" name="timespend" required="" placeholder="Timespend" class="form-control" id="emailAddress" value="<?php echo $data->Timespend ?>" >
                </div>
                <div class="form-group">
                  <label for="pass1">Image<span class="text-danger">*</span></label>
                  <input type="file" name="image" >
                  <div><img src="<?php echo base_url() ?>/packageimage/<?php echo $data->Image ?>"  width="500" height="500"/></div>
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Submit </button>
                  <a href="<?php echo site_url() ?>/packagescontroller/showpackages" class="btn btn-default waves-effect m-l-5"> Cancel </a>
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
