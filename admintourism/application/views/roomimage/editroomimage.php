	<div class="clearfix"></div>
        <div class="row" style="margin-left:450px; margin-top:90px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update roomimage---||</h4>
   <br>
   <br>
              <form enctype="multipart/form-data" action="<?php echo site_url();?>/roomimagecontroller/update/<?php echo $data->rmid ?>" method="post">
              	<div class="form-group">
                  <label for="userName">Room name<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="rid" >
                  
                  <?php
            foreach ($srid as $row)
          	{
			  if($row->rid==$data->rid)
			  {
          ?>
                  <option value="<?php echo $row->rid ?>" selected="selected"><?php echo $row->rname ?></option>
                  <?php
			  }
			  else
			  {
				  ?>
				  <option value="<?php echo $row->rid ?>"><?php echo $row->rname ?></option>
				<?php
                }
		  }
          ?>
                  </select>
                  <br />
                  <label for="userName">Hotel name<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="Hotelid" >
                  
                  <?php
            foreach ($shid as $row)
          {
          	if($row->Hotelid==$data->hotelid)
			  {
          ?>
                  <option value="<?php echo $row->Hotelid ?>" selected="selected" ><?php echo $row->Hotelname ?></option>
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
                  <label for="emailAddress">rimage<span class="text-danger"></span></label>
                  <input type="file" name="title" >
                  <td><img src="<?php echo base_url();?>/roomimages/<?php echo $data->rimage ?>"  width="80" height="80"/></td>
              
                <div class="form-group">
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> update </button>
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
