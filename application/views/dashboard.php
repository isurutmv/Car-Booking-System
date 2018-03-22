<?php include 'header.php' ?>

  <div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="#"> <i class="icon-shopping-bag"></i> Payments</a> </li>
          <li> <a href="<?php echo base_url('admin/booking');?>"> <i class="icon-calendar"></i> Booking </a> </li>
          <li> <a href="<?php echo base_url('admin/tours');?>"> <i class="icon-tour"></i> Tours</a> </li>
          <li> <a href="<?php echo base_url('admin/owners');?>"> <i class="icon-owner"></i> Owners</a> </li>
          <li> <a href="<?php echo base_url('admin/vehicals');?>"> <i class="icon-vehical"></i> Vehicals</a> </li>
          <li> <a href="#"> <i class="icon-map"></i> Map</a> </li>
          <li> <a href="<?php echo base_url('admin/reports');?>"> <i class="icon-report"></i> Reports</a> </li>
          <li> <a href="#"> <i class="icon-user"></i> Manage Users </a> </li>
          
        </ul>
   </div>
   
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Ongoing Tour</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Tour ID</th>
                  <th>Driver Name</th>
                  <th>D.NIC</th>
                  <th>Driving Licence Number</th>
                  <th>Driver Telephone</th>
                  <th>Garanter Name</th>
                  <th>G.NIC</th>
                  <th>G.Address</th>
                  <th>G.Telephone</th>
                  <th>Vehical Number</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Time</th>
                  <th>Start Meeter</th>
                  <th>Full Payment</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

            if($fetch_tour->num_rows()>0){

                foreach($fetch_tour->result() as $row)
                {
                                         ?> 
        <tr>
            <td><?php echo $row->TID; ?></td>
            <td><?php echo $row->dname; ?></td>
            <td><?php echo $row->dnic; ?></td>
            <td><?php echo $row->dlicence; ?></td>
            <td><?php echo $row->dtelephone; ?></td>
            <td><?php echo $row->gname; ?></td>
            <td><?php echo $row->gnic; ?></td>
            <td><?php echo $row->gaddress; ?></td>
            <td><?php echo $row->gtelephone; ?></td>
            <td><?php echo $row->vehical; ?></td>
            <td><?php echo $row->sdate; ?></td>
            <td><?php echo $row->edate; ?></td>
            <td><?php echo $row->time; ?></td>
            <td><?php echo $row->smeeter; ?></td>
            <td><?php echo $row->payment; ?></td>
           

            <td>
                <a href="<?php echo base_url('admin/takebooking'); ?>/<?php echo $row->TID;?> "><button type="button" class="btn btn-success">End Tour</button></a>
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
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Today's Booking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
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

            if($fetch_todaybooking->num_rows()>0){

                foreach($fetch_todaybooking->result() as $row)
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
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tommorwow's Booking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
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

            if($fetch_tomorrowbooking->num_rows()>0){

                foreach($fetch_tomorrowbooking->result() as $row)
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
        </div>
   
<?php include 'footer.php' ?>