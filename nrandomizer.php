<?php
	//make sure to set the characterset to UTF-8
	header('Content-Type: text/html;charset=utf-8');
	//require the jpwords.php file
	require_once('jpwords.php');
?>

<html>
		<head>
			<style>
			.big { font-size: 520%; color : red;}	
			.hidden { color: white; font-size: 36;}
			</style>
		</head>

	<body>
		<center>
		<?php $randomword = getRandomJPWord(); ?>
		<font class="big"><?php echo $randomword[0]; ?></font>
		<br><br>
		<font class="hidden"><?php echo $randomword[1]; ?></font>
		<br><br>
		<font class="hidden"><?php echo $randomword[2]; ?></font>
		<br><br>
		<font class="hidden"><?php echo $randomword[3]; ?> </font>
		</center>
	
	

	</body>
</html>