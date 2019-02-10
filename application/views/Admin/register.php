<?php include('header.php') ?>

<div class="container" style="margin-top: 20px;">
	<h1>Admin form</h1>

	<?php  
	//user of flashdata same as java script
		if($user=$this->session->flashdata('user')):
			$user_class=$this->session->flashdata('user_class');
	?>
	 <div class="row">
		<div class="col-lg-6">
			<div class="alert <?=$user_class; ?>">
				<?php echo $user; 
				// echo anchor('login/','  login hare?','class="link-class"') ?>
			</div>
		</div>
	</div> 

	<?php endif; ?>
		<!--html helper of form-->
	<?php echo form_open('users/sendEmail'); ?>

	<div class="row">
	<div class="col-lg-6">

		<div class="form-group">
			<label for="username">Username: </label>
			<!--html helpter of input text-->
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]); ?>
		</div>
	</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('username'); ?>
		</div>
	</div><!--row-->

	<div class="row">
	<div class="col-lg-6">

		<div class="form-group">
			<label for="email">Email: </label>
			<!--html helpter of input text-->
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'email','value'=>set_value('email')]); ?>
		</div>
	</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('email'); ?>
		</div>
	</div><!--row-->

	<div class="row">
	<div class="col-lg-6">

		<div class="form-group">
			<label for="password">Password: </label>
			<!--html helpter of input text-->
			<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter password','name'=>'password','value'=>set_value('password')]); ?>
		</div>
	</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('password'); ?>
		</div>
	</div><!--row-->

	<div class="row">
	<div class="col-lg-6">

		<div class="form-group">
			<label for="firstname">Firstname: </label>
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter firstname','name'=>'firstname','value'=>set_value('firstname')]); ?>
		</div>
	</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('firstname'); ?>
		</div>
	</div><!--row-->
	
	<div class="row">
	<div class="col-lg-6">

		<div class="form-group">
			<label for="lastname">Lastname: </label>
			<!--html helpter of input text-->
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter lastname','name'=>'lastname','value'=>set_value('lastname')]); ?>
		</div>
	</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('lastname'); ?>
		</div>
	</div><!--row-->
		
		<!--html helper for submit button-->
		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-danger','value'=>'Submit']); ?>
		<!--html helper for reset form-->
		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); 
			echo anchor('login/','log in.','class="link-class"') ?>
	
</div>
<?php include('footer.php'); ?>