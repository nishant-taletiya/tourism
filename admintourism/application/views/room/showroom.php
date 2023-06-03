<link href="<?php echo base_url() ?>plugins/slick-slider/slick.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>plugins/slick-slider/slick-theme.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/css/default.css" rel="stylesheet" type="text/css" />
  <div class="content-page"> 
    <div class="content">
      <div class="container">
        <div id="page-title"> </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <h4 class="m-t-0 header-title" align="center"><b>||---Show Rooms---||</b></h4>
              <form method="post" action="<?php echo site_url() ?>/roomcontroller/deleteall" >
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>
                  <?php 
                  if($this->uri->segment(2)=="checkall")
                  {
                  ?>
                    <a href="<?php echo site_url() ?>/roomcontroller/showroom">uncheck all</a>
                  <?php
                  }
                  else
                  {
                  ?>
          <a href="<?php echo site_url() ?>/roomcontroller/checkall">check all</a>
                  <?php
          }
          ?>
                  </th>
                    <th>rid</th>
                    <th>hotel</th>
                    <th>rname</th>
                    <th>rcategory</th>
                    <th>rprice</th>
                    <th>rtitle</th>
                    <th>rdetail</th>
   					<th>rstatus</th>
                    <th>Images</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				foreach($room as $row)
				{
				?>
                <tr>
                    <td><?php 
          if($this->uri->segment(2)=="checkall")
          {
          ?>
                  <input type="checkbox" name="chk[]" value="<?php echo $row->rid ?>" checked="checked" />
                  <?php
          }
          else
          { ?>
          <input type="checkbox" name="chk[]" value="<?php echo $row->rid ?>" />
                  <?php
          }
          ?></td>
                   	<td><?php echo $row->rid ?></td>
                    <td><?php echo $row->Hotelname ?></td>
                    <td><?php echo $row->rname ?></td>
                    <td><?php echo $row->rcategory ?></td>
                    <td><?php echo $row->rprice ?></td>
                    <td><?php echo $row->rtitle ?></td>
                    <td><?php echo $row->rdetail ?></td>
                    
                    <td><a href="<?php echo site_url()?>/roomcontroller/status/<?php echo $row->rid ?>"><?php echo $row->rstatus ?></a> </td>
                    <td>
                     <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $row->rid ?>">Show Images</button>
               
                    </td>
                        <td><a href="<?php echo site_url() ?>/roomcontroller/delete/<?php echo $row->rid ?>"><font color="red">Delete</font></a> |         
                        <a href="<?php echo site_url() ?>/roomcontroller/edit/<?php echo $row->rid ?>"><font color="red">edit</font></a></td>           
                        

                  </tr>
             <div class="modal fade bs-example-modal-lg<?php echo $row->rid ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true "  >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content" style="height:400px;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="myLargeModalLabel">Room Images</h4>
                    </div>
                    <div class="modal-body">
                    
                   <div class="col-sm-12">
          <div class="card-box">

            <div class="fade-slider slider ">
            <?php
			$this->db->where('rid',$row->rid);
			$rimg=$this->db->get('roomimages')->result();
			foreach($rimg as $rrow)
			{
			?>
              <div> <img src="<?php echo base_url() ?>/roomimages/<?php echo $rrow->rimage ?>" alt="slider-img" class="img-responsive" style="height:200px;width:750px"> </div>
			<?php
			}
			?>
             
            </div>
          </div>
        </div>     
                     
                     
                     
                     
                     
                     
                     </div>
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
              </div> 
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
<script src="<?php echo base_url() ?>plugins/slick-slider/slick.min.js" ></script> 
<script src="<?php echo base_url() ?>assets/pages/jquery.slider.init.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/waves.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
<!-- init --> 
<script src="<?php echo base_url() ?>assets/pages/jquery.datatables.init.js"></script> 

<script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script> 
<script src="<?php echo base_url() ?>plugins/datatables/datatables.custom.js"></script>