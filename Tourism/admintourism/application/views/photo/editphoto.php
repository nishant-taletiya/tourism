<div class="col-lg-6"  style="margin-left:450px; margin-top:90px;">
            <div class="card-box">
              <h4 class="header-title m-t-0" align="center">||---Update Photo---||</h4>

              <form enctype="multipart/form-data" action="<?php echo site_url() ?>/photocontroller/update/<?php echo $data->PPID ?>" method="post">
              <div class="form-group">
                  <label for="userName">Photo<span class="text-danger"></span></label>
                  <input type="file" name="photo" >
                  <td><img src="<?php echo base_url();?>/photoimage/<?php echo $data->photo ?>"  width="80" height="80"/></td>
                </div>
              <div class="form-group">
                  <label for="userName">Title<span class="text-danger"></span></label>
                  <input type="text" name="title" required="" placeholder="Title" class="form-control" id="userName" value="<?php echo $data->title ?>" >
                </div>
                <div class="form-group text-right m-b-0">
                  <button class="btn btn-primary waves-effect waves-light" type="submit"> Insert </button>
                  <a href="<?php echo site_url() ?>/photocontroller/showphoto" class="btn btn-default waves-effect m-l-5"> Cancel </button>
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
