<?php include 'headertable.php' ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Booking</a> </div>
    <h1>Booking</h1>
  </div>
  <div class="container-fluid">
  	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="<?php echo base_url('admin/dashboard');?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="<?php echo base_url('admin/newbooking');?>"> <i class="icon-calendar"></i> New Booking </a> </li>
        </ul>
   </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Ongoing Booking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>BID</th>
            <th>Vehical Number</th>
            <th>Booking Date</th>
            <th>End Date</th>
            <th>B.No</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Telephone</th>
            <th>NIC</th>
            <th>Name</th>
            <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_booking->num_rows()>0){

                foreach($fetch_booking->result() as $row)
                {
                                         ?> 
        <tr>
            <td><?php echo $row->BID; ?></td>
            <td><?php echo $row->vehical_number; ?></td>
            <td><?php echo $row->booking_date; ?></td>
            <td><?php echo $row->end_date; ?></td>
            <td><?php echo $row->bill_number; ?></td>
            <td><?php echo $row->booking_time; ?></td>
            <td><?php echo $row->duration; ?></td>
            <td><?php echo $row->telephone; ?></td>
            <td><?php echo $row->NIC; ?></td>
            <td><?php echo $row->name; ?></td>

            <td>
                <a href="<?php echo base_url('admin/updatebooking'); ?>/<?php echo $row->BID;?> "><button type="button" class="btn btn-success">Edit</button></a>
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
           <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Booking History</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>BID</th>
            <th>Vehical Number</th>
            <th>Booking Date</th>
            <th>End Date</th>
            <th>B.No</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Telephone</th>
            <th>NIC</th>
            <th>Name</th>
            <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_hbooking->num_rows()>0){

                foreach($fetch_hbooking->result() as $row)
                {
                                         ?> 
        <tr>
            <td><?php echo $row->BID; ?></td>
            <td><?php echo $row->vehical_number; ?></td>
            <td><?php echo $row->booking_date; ?></td>
            <td><?php echo $row->end_date; ?></td>
            <td><?php echo $row->bill_number; ?></td>
            <td><?php echo $row->booking_time; ?></td>
            <td><?php echo $row->duration; ?></td>
            <td><?php echo $row->telephone; ?></td>
            <td><?php echo $row->NIC; ?></td>
            <td><?php echo $row->name; ?></td>
             <td>
                <a href="<?php echo base_url('admin/updatetour'); ?>/<?php echo $row->BID;?> "><button type="button" class="btn btn-success">Edit</button></a>
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
