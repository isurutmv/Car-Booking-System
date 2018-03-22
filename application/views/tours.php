<?php include 'headertable.php' ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Booking</a> </div>
    <h1>Tours</h1>
  </div>
  <div class="container-fluid">
  	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="<?php echo base_url('admin/dashboard');?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="<?php echo base_url('admin/newtour');?>"> <i class="icon-calendar"></i> New Tour</a> </li>
        </ul>
   </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Tour History</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>TID</th>
            <th>Vehical Number</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>B.No</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Driver Name</th>
            <th>D.NIC</th>
            <th>Driving Licence</th>
            <th>D.Telephone</th>
            <th>G.Name</th>
            <th>G.Address</th>
            <th>G.Telephone</th>
            <th>G.NIC</th>
            <th>Ended Date</th>
            <th>End Time</th>
                </tr>
              </thead>
              <tbody>
                
                <?php

           

                foreach($tourhistory->result() as $row)
                {
                 ?>     <tr>
                            <td><?php echo $row->TID; ?></td>
                            <td><?php echo $row->vehical; ?></td>
                            <td><?php echo $row->sdate; ?></td>
                            <td><?php echo $row->edate; ?></td>
                            <td><?php echo $row->bill; ?></td>
                            <td><?php echo $row->time; ?></td>
                            <td><?php echo $row->duration; ?></td>
                            <td><?php echo $row->dname; ?></td>
                            <td><?php echo $row->dnic; ?></td>
                            <td><?php echo $row->dlicence; ?></td>
                            <td><?php echo $row->dtelephone; ?></td>
                            <td><?php echo $row->gname; ?></td>
                            <td><?php echo $row->gaddress; ?></td>
                            <td><?php echo $row->gtelephone; ?></td>
                            <td><?php echo $row->gnic; ?></td>
                            <td><?php echo $row->endate; ?></td>
                            <td><?php echo $row->etime; ?></td>
                                

                         </tr>
                 <?php  
                }
            

             ?>
       
              </tbody>
            </table>
          </div>
          </div>
           
        
<?php include 'footertable.php' ?>
