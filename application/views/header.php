<?php
if( !($this->session->userdata('loggedin'))){

    redirect('welcome');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DGI Cab Service</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/bootstrap.min.css" />
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/fullcalendar.css" />
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/maruti-style.css" />
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/maruti-media.css" class="skin-color" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/select2.css" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url('admin/dashboard');?>">DGI Cab Service</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
    
    
    <li class=""><a title="" href="<?php echo base_url('users/loggout');?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('admin/dashboard');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>