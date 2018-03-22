<?php include 'headertable.php' ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Vehicals</a> </div>
    <h1>Vehicals Details</h1>
  </div>
  <div class="container-fluid">
  	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="<?php echo base_url('admin/dashboard');?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="<?php echo base_url('admin/newvehical');?>"> <i class="icon-vehical"></i> New Vehical </a> </li>
        </ul>
   </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Vehicals Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>VID</th>
            <th>Vehical Number</th>
            <th>Owner</th>
            <th>Vehical Name</th>
            <th>Rate Per Day</th>
            <th>Rate Per Hour</th>
            <th>Rate Per KM</th>
            <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_vehical->num_rows()>0){

                foreach($fetch_vehical->result() as $row)
                {
                                         ?> 
                               <tr>
                                   <td><?php echo $row->VID; ?></td>
                                   <td><?php echo $row->vehical_number; ?></td>
                                   <td><?php echo $row->owner; ?></td>
                                   <td><?php echo $row->vehical_name; ?></td>
                                   <td><?php echo $row->rate_per_day; ?></td>
                                   <td><?php echo $row->rate_per_km; ?></td>
                                   <td><?php echo $row->rate_per_hour; ?></td>

                                        <td>
                                            <a href="<?php echo base_url('admin/updatevehical'); ?>/<?php echo $row->VID;?> "><button type="button" class="btn btn-success">Edit</button></a>
                                        </td>

                                    </tr>
                                   
                                  </tr>
                 <?php  
                }
            }

             ?>
              </tbody>
            </table>
          </div>
        </div>
        
<?php include 'footertable.php' ?>
