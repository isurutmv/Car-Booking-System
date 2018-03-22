<?php include 'headerform.php'; ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url('admin/vehicals');?>" class="tip-bottom">Vehicals</a> <a href="#" class="current">Add New Vehical</a> </div>
    <h1>Add New Vehical</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Vehical-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url('insert/insertvehical') ?>" method="POST" class="form-horizontal">
              
              <div class="control-group">
                <label class="control-label">Vehical Number :</label>
                <div class="controls">
                  <input type="text" class="span11" name="vehicalnumber" placeholder="First name" />
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Owner</label>
                <div class="controls">
                  <select name="ownername" >
                    <?php

            

                foreach($fetch_owner->result() as $row)
                {
                 ?>    
                        <option><?php echo $row->Name; ?></option>

                <?php  
                }
            

             ?>
           </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Vehical Name :</label>
                <div class="controls">
                  <input type="text" class="span11" name="vehicalname" placeholder="Last name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per Day :</label>
                <div class="controls">
                  <input type="text" class="span11" name="rateday" placeholder="First name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per Hour :</label>
                <div class="controls">
                  <input type="text" class="span11" name="ratehour" placeholder="Last name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per KM :</label>
                <div class="controls">
                  <input type="text" class="span11" name="ratekm" placeholder="First name" />
                </div>
              </div>
              
              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Add Vehical</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
<?php include 'footerform.php'; ?>
