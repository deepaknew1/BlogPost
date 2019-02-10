<?php include('header.php') ?>


<div class="container" style="margin-top: 20px;">
	<h1>EDit Articles</h1>
	
		<!--html helper of form-->
	<?php
	 echo form_open("admin/updateArticle/{$article->id}");
	//echo form_hidden('article_Id',$article->id); ?>
	
	<div class="row">

	<div class="col-lg-6">

		<div class="form-group">
			<label for="article_title">Article title: </label>
			<!--html helpter of input text-->
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article title','name'=>'article_title','value'=>set_value('article_title',$article->article_title)]); ?>
		</div>
		</div><!--col-lg-6-->
		<div class="col-lg-6" style="margin-top: 35px;">
			<?php echo form_error('article_title'); ?>
		</div>
		</div><!--row-->

		<div class="row"><!---->
			<div class="col-lg-6">
				<div class="form-group">
					<label for="body">Article body:</label>
					<!--html helper of password-->
					<?php echo form_textarea(['class'=>'form-control','type'=>'body','placeholder'=>'Enter Article body','name'=>'article_body','value'=>set_value('article_body',$article->article_body)]); ?>
				</div>
			</div>
		<div class="col-lg-6"  style="margin-top: 35px;">
			<?php echo form_error('article_body'); ?>
		</div>

		</div><!--row-->

		
		
		<!--html helper for submit button-->
		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-danger','value'=>'Update']); ?>
		<!--html helper for reset form-->
		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
		
	
</div>
<?php include('footer.php'); ?>