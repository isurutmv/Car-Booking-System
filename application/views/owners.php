<?php include 'headertable.php' ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">owners</a> </div>
    <h1>Owner Details</h1>
  </div>
  <div class="container-fluid">
  	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="<?php echo base_url('admin/dashboard');?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="<?php echo base_url('admin/newowner');?>"> <i class="icon-owner"></i> New Owner </a> </li>
        </ul>
   </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Owner Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>OID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Account Number</th>
            <th>Rate Per Month</th>
            <th>Rate Per KM</th>
             <th>Rate Per Hour</th>
              <th>KM Limit</th>
            <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_owner->num_rows()>0){

                foreach($fetch_owner->result() as $row)
                {
                 ?>     <tr>
                            <td><?php echo $row->OID; ?></td>
                            <td><?php echo $row->Name; ?></td>
                            <td><?php echo $row->NIC; ?></td>
                            <td><?php echo $row->Address; ?></td>
                            <td><?php echo $row->Telephone; ?></td>
                            <td><?php echo $row->Account; ?></td>
                            <td><?php echo $row->munth; ?></td>
                            <td><?php echo $row->km; ?></td>
                            <td><?php echo $row->rate_hour; ?></td>
                            <td><?php echo $row->kmlimit; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/updateowner'); ?>/<?php echo $row->OID;?> "><button type="button" class="btn btn-success">Edit</button></a>
                                </td>

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
