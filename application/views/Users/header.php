<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")?> ">
<!--or	<?= link_tag("Assets/css/bootstrap.min.css") ?>-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BlogPost</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a href="<?php echo base_url()?>export" class="nav-link" >View Feedback !!</a>
      </li>
      <li class="nav-item">
        dynamic_depandent is a controller if you not provide method name then default method will be index
        <a href="<?php echo base_url()?>dynamic_dependent" class="nav-link">Little Ajax</a>
      </li> -->
      <li class="nav-item active">
        <a href="<?php echo base_url()?>" class="nav-link" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>login">user Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>about">About</a>
      </li>
    </ul>    
  </div>
</nav>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  ></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>