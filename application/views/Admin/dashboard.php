<?php include('header.php') ?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
	<?= anchor('admin/add','add article', ['class'=>'btn btn-lg btn-primary'])  ?>
	</div>
<div class="container" style="margin-top: 20px;">
	<?php  
	//user of flashdata same as java script
		if($msg=$this->session->flashdata('msg')):
			$msg_class=$this->session->flashdata('msg_class');
	?>
	<div class="row" style="margin-top: 19px;">
		<div class="col-lg-6">
			<div class="alert <?=$msg_class; ?>">
				<?php echo $msg; ?>
			</div>
		</div>
	</div>

	<?php endif; ?>
</div>

	<div class="table">
		<table>
			<thead>
				<tr>
					<th>Sl no.</th>
					<th>Article Title</th>
					<th>Article Body</th>
					<th>Images</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					 $count=$this->uri->segment(3);
					if(count($article)): 
					foreach ($article as $art):	
					 
					$count++;
				?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $art->article_title; ?></td>
					<td><?php echo $art->article_body; ?></td>
					<td><?= $art->image_path; ?></td>
					<td>
						<?php 
						//you can write array or use can use ['class'=>'class-link btn btn-primary']		
						echo anchor("admin/edit/{$art->id}",'Edit',array('class'=>'class-link btn btn-primary'));
						?>
					</td>
					<td>
						<?=
							form_open('admin/deleteArticle'),
							form_hidden('id',$art->id),
							form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
							form_close();
						?>

					</td>
				</tr>
				<?php  endforeach; ?>
				<?php else:	 ?>

				<tr>
					<td colspan="3">Please add your first article</td>
				</tr>

				<?php  endif; ?>
			</tbody>
			
		</table>
<?php  echo $this->pagination->create_links();   ?> 
		<!-- <ul class="pagination">
		
			<li>
				<a href=""><</a>
			</li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>

			<li><a href="" class="active">></a></li>

			<li><a href="">4</a></li>
			<li><a href="">5</a></li>
		</ul> -->
	</div>

</div>

<?php include('footer.php'); ?>
