  <div class="content-page"> 
    <div class="content">
      <div class="container">
        <div id="page-title"> </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <h4 class="m-t-0 header-title" align="center"><b>||---Show RoomImages---||</b></h4>
               <form method="post" action="<?php echo site_url() ?>/roomimagecontroller/deleteall">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th>
                  <?php 
				  	if($this->uri->segment(2)=="checkall")
						{
					?>
                   	<a href="<?php echo site_url(); ?>/roomimagecontroller/showroomimage">uncheckall</a> 
				  <?php 
						}
				  else
				  {
				  ?>
                   	<a href="<?php echo site_url(); ?>/roomimagecontroller/checkall">checkall</a>
                  	<?php
				  }
					?>
                    </th>
                    <th>rmid</th>
                    <th>Room name</th>
                    <th>Hotel name</th>
                    <th>room image</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
				foreach($roomimage as $row)
				{
				?>
                <tr>
                <td>
                  <?php 
				  	if($this->uri->segment(2)=="checkall")
						{
					?>
                   	<input type="checkbox" name="del[]" value="<?php echo $row->rid ?>" checked="checked">
				  <?php 
						}
				  else
				  {
				  ?>
					<input type="checkbox" name="del[]" value="<?php echo $row->rid ?>">
                  	<?php
				  }
					?>
                </td>
                    <td><?php echo $row->rid?></td>
                    <td><?php echo $row->rname?></td>
                    <td><?php echo $row->Hotelname?></td>
                    <td><img src="<?php echo base_url();?>/roomimages/<?php echo $row->rimage ?>"  width="80" height="80"/></td>
                    <td><a href="<?php echo site_url() ?>/roomimagecontroller/delete/<?php echo $row->rid ?>"><font color="red">Delete</font></a>||<a href="<?php echo site_url() ?>/roomimagecontroller/edit/<?php echo $row->rid ?>"><font color="red">Edit</font></a></td>
                                
                  </tr>
                <?php
				}
				?>  
              </tbody>	
              </table>
              <input type="submit"  value="delete" />
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary back-to-top" ><span class="glyphicon glyphicon-chevron-up"></span></a>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/waves.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/buttons.bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/jszip.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/pdfmake.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/vfs_fonts.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/buttons.html5.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/buttons.print.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.fixedHeader.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.keyTable.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.responsive.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/responsive.bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.scroller.min.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.colVis.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/dataTables.fixedColumns.min.js"></script> 

<!-- init --> 
<script src="<?php echo base_url() ?>assets/pages/jquery.datatables.init.js"></script> 

<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/datatables.custom.js"></script>