  <div class="content-page"> 
    <div class="content">
      <div class="container">
        <div id="page-title"> </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <h4 class="m-t-0 header-title" align="center"><b>||---Show attraction---||</b></h4>
              <form method="post" action="<?php echo site_url() ?>/attractioncontroller/deleteall" >
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  	<th>
                  <?php 
				  if($this->uri->segment(2)=="checkall")
				  {
				  ?>
                  <a href="<?php echo site_url() ?>/attractioncontroller/showattraction">uncheck all</a>
                  <?php
				  }
				  else
				  { ?>
				  <a href="<?php echo site_url() ?>/attractioncontroller/checkall">check all</a>
                  <?php
				  }
				  ?>
                  </th>
                    <th>Id</th>
                    <th>Place name</th>
                    <th>Subplace title</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
					 <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
				foreach($attr as $row)
				{
				?>
                <tr>
                	<td><?php 
				  if($this->uri->segment(2)=="checkall")
				  {
				  ?>
                  <input type="checkbox" name="chk[]" value="<?php echo $row->AID ?>" checked="checked" />
                  <?php
				  }
				  else
				  { ?>
				  <input type="checkbox" name="chk[]" value="<?php echo $row->AID ?>" />
                  <?php
				  }
				  ?></td>
                    <td><?php echo $row->AID ?></td>
                    <td><?php echo $row->Pname ?></td>
                    <td><?php echo $row->SPtitle ?></td>
                    <td><?php echo $row->Atitle ?></td>
                    <td><?php echo $row->Adescription ?></td>
                    <td><img src="<?php echo base_url();?>/attractionimage/<?php echo $row->Aimage ?>"  width="80" height="80"/></td>
                    <td><?php echo $row->Adateregister ?></td>
                    <td><a href="<?php echo site_url() ?>/attractioncontroller/status/<?php echo $row->AID ?>"><?php echo $row->Astatus ?></a></td>
                    <td><a href="<?php echo site_url() ?>/attractioncontroller/delete/<?php echo $row->AID ?>"><font color="red">Delete</font></a>|
                    <a href="<?php echo site_url() ?>/attractioncontroller/edit/<?php echo $row->AID ?>"><font color="red">Edit</font></a></td>
                  </tr>
                <?php
				}
				?>  
                </tbody>
              </table>
              <input type="submit" name="deleteall" value="delete" style="background:none;border:none;color:blue;" />
              </form>        
            </div>
          </div>
        </div>
        	<!-- end row --> 
        
      </div>
    </div>
  </div>
</div>

<!-- ============================================================== --> 
<!-- End Right content here --> 
<!-- ============================================================== -->

<!-- END wrapper --> 

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