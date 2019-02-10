<!DOCTYPE html>
<html>
<head>
	<title>Encryption in Codeineter</title>

</head>
<body>
	<div id="main">
		<div id="show_form">
			<h2>Encrption in codeignter</h2>
			<hr>
			<?php
				open_form('encryption/key_encoder');
				echo "<div class='error_log'>";
				echo valiadation_error();
				echo "</div>";
				echo form_label('Enter your Massege');
				$data=array('name'=>'key' 'placeholder'=>'plz enter massage');
				echo form_input($data);
				echo "<br>";
				echo "<br>";
				

			?>
		</div>
	</div>
</body>
</html>