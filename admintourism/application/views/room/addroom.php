<link href="<?php echo base_url()?>plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="<?php echo base_url()?>plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

<!-- Bootstrap fileupload css -->
<link href="<?php echo base_url()?>plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />	

 <div class="clearfix"></div>
        <div class="row" style="margin-left:450px; margin-top:90px;">
          <div class="col-lg-6">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Add room---||</h4>
   <br>
   <br>
              <form action="<?php echo site_url();?>/roomcontroller/insert" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="userName">hotelid<span class="text-danger">*</span></label>
                  <select class="form-control" id="userName" name="hi" >
                  <?php
				  	foreach ($shid as $row)
					{
				  ?>
                  <option value="<?php echo $row->Hotelid ?>"><?php echo $row->Hotelname ?></option>
                  <?php
					}
					?>
                  </select>
                  <br />
                  
                </div>
                
                <div class="form-group">
                  <label for="userName">rname<span class="text-danger">*</span></label>
                  <input type="text" name="rn"  required
                                                   placeholder="Enter room name" class="form-control" id="userName" >
                </div>
                <div class="form-group">
                  <label for="emailAddress">rcategory<span class="text-danger">*</span></label>
                  <input type="text" name="rc"  required
                                                   placeholder="Enter room category" class="form-control" id="emailAddress">
                </div>
                <div class="form-group">
                  <label for="passWord2">rprice <span class="text-danger">*</span></label>
                  <input  name="rp" type="text" required
                                                   placeholder="enter room price" class="form-control" id="passWord2">                                                  
                </div>
<div class="form-group">
                  <label for="passWord2">rtitle <span class="text-danger">*</span></label>
                  <input  name="rt" type="text" required
                                                   placeholder="enter room title" class="form-control" id="passWord2">                                                  
                </div>

				<div class="form-group">
                  <label for="passWord2">rdetail <span class="text-danger">*</span></label>
                  <input  name="rd" type="text" required
                                                   placeholder="enter room detail" class="form-control" 						                id="passWord2">                                                  
                </div>
                
                <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail"> <img src="<?php echo base_url()?>/attractionimage/c5d327cbe167851ac17ecccb05e7c998.jpg" alt="image" /> </div>
                      <div class="fileupload-preview fileupload-exists thumbnail"></div>
                      <div>
                        <button type="button" class="btn btn-default btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input name="rimg[]"  type="file" multiple="multiple" class="btn-default" />
                        </button>
                         </div>
                    </div>
                <div class="form-group">
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
<script src="<?php echo base_url()?>plugins/jquery.filer/js/jquery.filer.min.js"></script> 
<script src="<?php echo base_url()?>/assets/js/jquery-3.4.1.min.js"></script> 

<!-- Bootstrap fileupload js --> 
<script src="<?php echo base_url()?>plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script> 
<!-- page specific js --> 
<script src="<?php echo base_url()?>assets/pages/jquery.fileuploads.init.js"></script> 

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/waves.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script> 

<!-- Parsley js --> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.min.js"></script> 
<script  src="<?php echo base_url()?>plugins/parsleyjs/parsley.custom.js"></script> 

<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script> 