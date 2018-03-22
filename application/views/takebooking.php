
<?php include 'headerform.php'; ?>

<?php
foreach($updatetour2->result() as $row){

           $id=$row->TID;
            $dname=$row->dname; 
            $dnic=$row->dnic;
            $dlicence=$row->dlicence;
            $dtelephone=$row->dtelephone;
            $vehical=$row->vehical;
            $gname=$row->gname;
            $gnic=$row->gnic;
            $gaddress=$row->gaddress;
            $gtelephone=$row->gtelephone;
            $sdate=$row->sdate;
            $edate=$row->edate;
            $duration=$row->duration;
            $bill=$row->bill;
            $bookingtime=$row->time;
            $payment=$row->payment;
            $smeeter=$row->smeeter;

}
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
            <form action="<?php echo base_url('insert/inserttourhistory') ?>" method="POST" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Tour ID :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $id; ?>" placeholder="Name" name="TID" />
                </div>
              <div class="control-group">
                <label class="control-label">Driver Name :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $dname; ?>" placeholder="Name" name="dname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">D.NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $dnic; ?>" placeholder="NIC" name="dnic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Driving Licence :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $dlicence; ?>" placeholder="Address" name="dlicence" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">D.Telephone :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $dtelephone; ?>" placeholder="Telephone" name="dtelephone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Garanter Name :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $gname; ?>" placeholder="Account Number" name="gname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $gnic; ?>" placeholder="Rate Per Month" name="gnic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.Address :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $gaddress; ?>" placeholder="Rate Per Km" name="gaddress" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">G.Telephone :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $gtelephone; ?>" placeholder="Rate Per Hour" name="gtelephone" />
                </div>
              </div>
              
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Tour-info</h5>
          </div>
              <div class="control-group">
                <label class="control-label">Vehical Number</label>
                <div class="controls">
                  <select name="vehicalnumber" >
                    
                   
              <option><?php echo $vehical; ?></option>

                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Start Date :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $sdate; ?>" placeholder="yyy-mm-dd" onchange="cal()" name="date" id="date" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">End Date :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $edate; ?>" placeholder="yyy-mm-dd" onchange="cal()" name="date2" id="date2" />
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
                  <input type="text" class="span11" value="<?php echo $duration; ?>" placeholder="Duration" name="duration"  id="duration" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Bill Number:</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $bill; ?>" name="billnumber" placeholder="Bill Number" />
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
                  <input type="text" class="span11" value="<?php echo $payment; ?>" name="fpayment" placeholder="Full Payment" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Start Meeter :</label>
                <div class="controls">
                  <input type="text" class="span11" value="<?php echo $smeeter; ?>" placeholder="Duration" name="smeeter"  id="duration" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Ended Date :</label>
                <div class="controls">
                  <input type="text" class="span11"  placeholder="yyy-mm-dd" name="date3" id="date3" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Ended Time :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Time" name="time2" id="time2" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">End Meeter :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Duration" name="endmeeter"  id="duration" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Additional Payment :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Duration" name="apayment"  id="duration" />
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="submit" value="submit">End Tour</button>
              </div>
            </form>


          </div>
          
          
        </div>
        </div>



      </div>

      
<?php include 'footerform.php'; ?>
