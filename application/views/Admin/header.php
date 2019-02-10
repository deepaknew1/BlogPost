<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")?> ">
<!--or	<?= link_tag("Assets/css/bootstrap.min.css") ?>-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin penal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 

  <?php
  	if($this->session->userdata('id')){

  ?>

  <li> <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">Logout</a></li>
<?php }else{ ?>
    <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="<?php echo base_url()?>" class="nav-link">Home</a>
      </li>
    </ul>
   </div> 
<?php }
//  or <?= anchor('admin/logout','Logout'); ?>



</nav>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  ></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>