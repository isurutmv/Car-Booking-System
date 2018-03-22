<?php include 'headerform.php'; ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo base_url('admin/owners');?>" class="tip-bottom">Owner</a> <a href="#" class="current">Add New Owner</a> </div>
    <h1>Add New Owner</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Personal-info</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url('insert/insertowner') ?>" method="POST" class="form-horizontal">
              
              <div class="control-group">
                <label class="control-label">Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Name" name="name" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">NIC :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="NIC" name="nic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Address" name="address" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Telephone :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Telephone" name="telephone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Account Number :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Account Number" name="account" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per Month :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Month" name="ratemonth" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per Km :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Km" name="ratekm" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate Per Hour :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Rate Per Hour" name="ratehour" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">KM Limit :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="KM Limit" name="kmlimit" />
                </div>
              </div>
              

              <div class="form-actions">
                <button type="submit" class="btn btn-success" name="submit" value="submit">Add Owner</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
<?php include 'footerform.php'; ?>
