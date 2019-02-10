<?php include('header.php') ?>

<div class="container" style="margin-top: 20px;">
	<h1>Admin form</h1>

	<?php  
	//user of flashdata same as java script
		if($error=$this->session->flashdata('Login_failed')):
	?>
	<div class="row">
		<div class="col-lg-6">
			<div class="alert alert-danger">
				<?php echo $error; ?>
			</div>
		</div>
	</div>

	<?php endif; ?>
		<!--html helper of form-->
	<?php echo form_open('login/index'); ?>
	<div class="row">

	<div class="col-lg-6">

		<div class="form-group">
			<label for="email">Username: </label>
			<!--html helpter of input text-->
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
		</div>
		</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('uname'); ?>
		</div>
		</div><!--row-->

		<div class="row"><!---->
			<div class="col-lg-6">
		<div class="form-group">
			<label for="Password">Password:</label>
			<!--html helper of password-->
			<?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter password','name'=>'pass','value'=>set_value('pass')]); ?>
		</div>
		</div>
		<div class="col-lg-6"  style="margin-top: 35px;">
			<?php echo form_error('pass'); ?>
		</div>

		</div><!--row-->
		
		<!--html helper for submit button-->
		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-danger','value'=>'Submit']); ?>
		<!--html helper for reset form-->
		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
		<?php echo anchor('users/register/','sign Up?','class="link-class"') ?>
	
</div>
<?php include('footer.php'); ?>