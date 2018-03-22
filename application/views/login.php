<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>DGI Cabs</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet"  type = "text/css" href= " <?php echo base_url(); ?>css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url();  ?>css/bootstrap-responsive.min.css" />
        <link rel="stylesheet"  type = "text/css" href= "<?php echo base_url();  ?>css/maruti-login.css" />
    </head>
    <body>
        <?php

   if($this->session->flashdata('msg')){
       
       ?>
       <div class="alert alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Warning!</h4>
              <?php echo $this->session->flashdata('msg');  ?>
               </div>
            <?php
   }

?>
   
        <div id="loginbox">    
        <?php echo validation_errors(); ?>        
            <form id="loginform" class="form-vertical" action="<?php echo base_url('users/login');?>" method="POST">
				 <div class="control-group normal_text"> <h3><img src="img/dgi.jpg" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username" name="username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
        
        <script src="<?php echo base_url();  ?>js/jquery.min.js"></script>  
        <script src="<?php echo base_url();  ?>js/maruti.login.js"></script> 
    </body>

</html>
