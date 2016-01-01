<!DOCTYPE html>
<html lang="en">
<head>
	<title>Random Word Generator</title>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<style type="text/css">
		* {
			margin: 0px;
			padding: 0px; 
			font-family: tahoma; 
		}
		#container {
			text-align: center;
			padding-top: 100px;  
		}
		p:nth-child(2) {
			border: 2px solid black; 
			padding: 10px; 
			margin: 15px auto; 
			max-width: 320px; 
			font-size: 2em; 
		}
		input {
			padding: 5px 10px; 
			font-size: 1em; 
		}
	</style>
</head>
<body>
	<div id="container">
		<p>Random Word <?php if($this->session->userdata('counter'))
			{
				echo "( attempt #".$this->session->userdata('counter')." )";
			}
		 ?></p>
		<?php if($this->session->userdata('random_word'))
			{
				echo "<p class='random'>".$this->session->userdata('random_word')."</p>";
			} 
		?>
		<form action='random' method='post'>
			<input type='submit' value='Generate'>
		</form>
	</div> <!-- End Container -->
</body> 
</head>