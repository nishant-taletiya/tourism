<link href="<?php echo base_url()?>plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="<?php echo base_url()?>plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
<!-- Bootstrap fileupload css -->
<link href="<?php echo base_url()?>plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

<div class="col-lg-6"  style="margin-left:450px; margin-top:90px;">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center" >||---Add Packages---||</h4>
              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/packagescontroller/insert" method="post">
              <div class="form-group">
                  <label for="userName">Attraction name<span class="text-danger"></span></label>
                  <select class="form-control" id="userName" name="aid" onchange="shotel(this.value)" >
                  <option>Select place</option>
                  <?php
				  	foreach ($said as $row)
					{
				  ?>
                  <option value="<?php echo $row->AID ?>"><?php echo $row->Atitle ?></option>
                  <?php
					}
					?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="userName">Hotel name<span class="text-danger"></span></label>
                  <select class="form-control" id="attraction" name="hid" >
                  <option>Select hotel</option>
                  <?php
				  	foreach ($shid as $row)
					{
				  ?>
                  <option value="<?php echo $row->Hotelid ?>"><?php echo $row->Hotelname ?></option>
                  <?php
					}
					?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="userName">Guide name<span class="text-danger"></span></label>
                  <select class="form-control" id="uname" name="gid" >
                  <option>Select Guide</option>
                  <?php
				  	foreach ($sgid as $row)
					{
				  ?>
                  <option value="<?php echo $row->GID ?>"><?php echo $row->Gname ?></option>
                  <?php
					}
					?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="userName">Package name<span class="text-danger"></span></label>
                  <input type="text" name="pname" required="" placeholder="Package name" class="form-control" id="userName">
                </div>  
              <div class="form-group">
                  <label for="userName">Price<span class="text-danger"></span></label>
                  <input type="text" name="price" required="" placeholder="Price" class="form-control" id="userName">
                </div>
                
                
                <h5>Description</h5>
                <div>
                	<textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="userName">Package date<span class="text-danger"></span></label>
                  <input type="date" name="pdate" required="" placeholder="Package date" class="form-control" id="userName">
                </div>
                <div class="form-group">
                  <label for="emailAddress">Timespend<span class="text-danger"></span></label>
                  <input type="date" name="timespend" required="" placeholder="Timespend" class="form-control" id="emailAddress">
                </div>
                
                <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail"> <img src="<?php echo base_url()?>/attractionimage/c5d327cbe167851ac17ecccb05e7c998.jpg" alt="image" /> </div>
                      <div class="fileupload-preview fileupload-exists thumbnail"></div>
                      <div>
                        <button type="button" class="btn btn-default btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input name="image"  type="file" class="btn-default" />
                        </button>
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
<script src="<?php echo base_url()?>plugins/jquery.filer/js/jquery.filer.min.js"></script> 
<script src="<?php echo base_url()?>/assets/js/jquery-3.4.1.min.js"></script> 
<script>
function shotel(id)
{
	$.ajax({
				url:"<?php echo site_url() ?>/packagescontroller/gethotel/"+id,
				method:"post",
				success: function(res)
				{
					var ndata=res.split("-");
			//		alert(ndata[0]);
			//		alert(ndata[1]);
					
					$("#attraction").empty();
					$("#attraction").html("<option>select hotel</option>");
					$("#attraction").append(ndata[0]);
				
				
					$("#uname").empty();
					$("#uname").html("<option>select Guide</option>");
					$("#uname").append(ndata[1]);
				
				}
			
		});
}
function sguide(id)
{
	$.ajax({
				url:"<?php echo site_url() ?>/packagescontroller/getguide/"+id,
				method:"post",
				success: function(res)
				{
					
					$("#username").empty();
					$("#username").html("<option>select Guide</option>");
					$("#username").append(res);
				}
			
		});
}


</script>
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