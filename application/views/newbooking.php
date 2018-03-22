<?php include 'headerform.php'; ?>
<?php 
$bookingtime='11:00:00'; 
?>
<div id="content">

  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url('admin/booking');?>" class="tip-bottom">Booking</a> <a href="#" class="current">Creat New Booking</a> </div>
    <h1>Creat New Booking</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Personal-info</h5>
          </div>
          <div class="widget-content nopadding">
            <?php

   if($this->session->flashdata('error')){
       echo "<div class='alert alert-danger' role='alert'>".$this->session->flashdata('error'); " </div>";
   }


   ?>
            <form action="<?php echo base_url('insert/insertbooking') ?>" method="POST" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Vehical Number</label>
                <div class="controls">
                  <select name="vehicalnumber" >
                    <?php

            

               
                foreach($fetch_vehical->result() as $row)
                {
                 ?>    
                        <option><?php echo $row->vehical_number; ?></option>

                <?php  
                }
            

             ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Booking Date :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="yyy-mm-dd" onchange="cal()" name="date" id="date" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">End Date :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="yyy-mm-dd" onchange="cal()" name="date2" id="date2" />
                </div>
              </div>
              <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("date2").value);
                var pickdt = new Date(document.getElementById("date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("date2")){
            document.getElementById("duration").value=GetDays();
        }  
    }
  </script>

              <div class="control-group">
                <label class="control-label">Duration :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Duration" name="duration"  id="duration" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Bill Number:</label>
                <div class="controls">
                  <input type="text" class="span11" name="billnumber" placeholder="Bill Number" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Time :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Time" name="time" id="time" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" name="nic" placeholder="NIC" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telephone Number:</label>
                <div class="controls">
                  <input type="text" class="span11" name="telephone" placeholder="Telephone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="name" placeholder="Name" />
                </div>
              </div>

              

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Create Booking</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
<?php include 'footerform.php'; ?>
