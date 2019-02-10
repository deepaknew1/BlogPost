<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter Dynamic Dependent Select Box Using Ajax</title>
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/jqury.js")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/bootstrap.min.js")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/jquery.js")?> ">
<script src="Assets/js/jquery.js"></script>

<script type="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
		.box
		{
			width: 100%;
			max-width: 550px;
			margin:0 auto;
		}
	</style>
</head>
<body>	

	<div class="container box">
		<br />
		<br />
		<h3 align="center">Codeignter Dynamic Dependent Select Box using Ajax</h3>
		<br />
		<div class="form-group">
			<select name="country" id="country" class="form-control input-lg">
				<option value="">Select country</option>
				<?php
					foreach ($country as $cou) {
						# code...
						echo '<option value="'.$cou->country_id.'">'.$cou->country_name.'</option>';

					}
				?>
			</select>
		</div>
		<br />
		<div class="form-group">
			<select name="state" id="state" class="form-control input-lg">
				<option value="">Choose state</option>
			</select>
		</div>
		<br />
		<div class="form-group">
			<select name="city" id="city" class="form-control input-lg">
				<option value="">Choose city</option>
			</select>
		</div>
	</div>
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/jqury.js")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/bootstrap.min.js")?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/js/jquery.js")?> ">

<script type="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<script>

$(document).ready(function()
{

		
	$('#country').change(function()

	{
		var country_id = $('#country').val();
		
		if(country_id != '')
		{
			$.ajax({
				url:"<?php echo base_url(); ?>dynamic_dependent/fetch_state",
				method:"POST",
				data:{country_id:country_id},
				success:function(data){
					$('#state').html(data);
					$('#city').html('<option value="">Select city</option>');
				}
			});
		}
		else
		{
			$('#state').html('<option value="">Select state</option>');
			$('#city').html('<option value="">Select city</option>');
		}
	});

	$('#state').change(function()
	{
		var state_id = $('#state').val();
		if(state_id != '')
		{
			$.ajax({
				url:"<?php echo base_url(); ?>dynamic_dependent/fetch_city",
				method:"POST",
				data:{state_id:state_id},
				success:function(data){
					$('#city').html(data);
					
				}
			});
		}
		else
		{
			$('#city').html('<option value="">Select city</option>');
		}
	});
});

</script>