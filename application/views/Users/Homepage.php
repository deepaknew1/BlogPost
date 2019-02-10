<?php include('header.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#myInput').on("keyup",function(){
			var value=$(this).val().toLowerCase();
			$('#myTable tr').filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>

	<!-- <div class="container" style="margin-top: 13px;">
		<div class="row">
			<div class="col-lg-5">
				<form class="form-inline">
					<input type="search" class="form-control" placeholder="anything" aria-label="Search" id="myInput">&nbsp &nbsp
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
				
			</div>
			
		</div>
	</div> -->
	<div class="container" style="margin-top: 13px;">
		<div class="row">

		<h1>All articles</h1>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th>Sl no.</th>
							<th>Article image</th>
							<th>article_title</th>
							<th>Publish one</th>
						</tr>
					</thead>
					<tbody id="myTable">
						<?php if(count($articles)):
						$count=$this->uri->segment(3);
						foreach ($articles as $art):  ?>
						<tr>
							<td><?php echo ++$count; ?></td>
							<?php if(! is_null($art->image_path)){ ?>
							<td><img src="<?php echo $art->image_path ?>" alt="" width="200" height="200"></td>
							<?php } ?>

							<td><?= anchor("admin/{$art->id}",$art->article_title); ?></td>
							<td><?= date('d M y H:i:s',strtotime($art->created_At));  ?></td>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="3">NO POSt has been made</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		
		<?php  echo $this->pagination->create_links();   ?> 
		</div>
	</div>
<?php include('footer.php'); ?>