 <div class="clearfix"></div>
        <div class="row" style="margin-left:450px; margin-top:90px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update room---||</h4>
   <br>
   <br>
              <form action="<?php echo site_url();?>/roomcontroller/update/<?php echo $data->rid ?>" method="post">
                <div class="form-group">
                  <label for="userName">hotelid<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="hi" >
                 <?php
				  	foreach ($shid as $row)
					{
						if ($row->Hotelid==$data->Hotelid)
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
                  <br />
                  
                </div>
                
                <div class="form-group">
                  <label for="userName">rname<span class="text-danger">*</span></label>
                  <input type="text" name="rn"  required
                                                   placeholder="Enter room name" class="form-control" id="userName" value="<?php echo $data->rname ?>">
                </div>
                <div class="form-group">
                  <label for="emailAddress">rcategory<span class="text-danger">*</span></label>
                  <input type="text" name="rc"  required
                                                   placeholder="Enter room category" class="form-control" id="emailAddress" value="<?php echo $data->rcategory ?>">
                </div>
                <div class="form-group">
                  <label for="passWord2">rprice <span class="text-danger">*</span></label>
                  <input  name="rp" type="text" required
                                                   placeholder="enter room price" class="form-control" id="passWord2" value="<?php echo $data->rprice ?>">                                                  
                </div>
<div class="form-group">
                  <label for="passWord2">rtitle <span class="text-danger">*</span></label>
                  <input  name="rt" type="text" required
                                                   placeholder="enter room title" class="form-control" id="passWord2" value="<?php echo $data->rtitle ?>">                                                  
                </div>

<div class="form-group">
                  <label for="passWord2">rdetail <span class="text-danger">*</span></label>
                  <input  name="rd" type="text" required
                                                   placeholder="enter room detail" class="form-control" id="passWord2" value="<?php echo $data->rdetail ?>">                                                  
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
