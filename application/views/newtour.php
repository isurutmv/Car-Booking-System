<?php include 'headerform.php'; ?>
<?php 
$bookingtime='11:00:00'; 
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url('admin/owners');?>" class="tip-bottom">Owner</a> <a href="#" class="current">Start New Tour</a> </div>
    <h1>Start New Tour</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Personal-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url('insert/inserttour') ?>" method="POST" class="form-horizontal">
              
              <div class="control-group">
                <label class="control-label">Driver Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Name" name="dname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">D.NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="NIC" name="dnic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Driving Licence :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Address" name="dlicence" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">D.Telephone :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Telephone" name="dtelephone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Garanter Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Account Number" name="gname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Month" name="gnic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.Address :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Km" name="gaddress" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.Telephone :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Hour" name="gtelephone" />
                </div>
              </div>
              
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Tour-info</h5>
          </div>
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
                <label class="control-label">Start Date :</label>
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
                <label class="control-label">Full Payments:</label>
                <div class="controls">
                  <input type="text" class="span11" name="fpayment" placeholder="Full Payment" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Start Meeter :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Duration" name="smeeter"  id="duration" />
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Start Tour</button>
              </div>
            </form>


          </div>
          
          
        </div>
        </div>



      </div>

      
<?php include 'footerform.php'; ?>
