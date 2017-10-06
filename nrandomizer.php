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
		<--!The CSS was made that the answers would be in white font so the User won't see it initially.  To see the answer  -->
		<--!the User just has to highlight the space below -->											     
		<?php $randomword = getRandomJPWord(); ?>
		<font class="big"><?php echo $randomword[0]; ?></font>
		<br><br>
		
		<?php //FOR block to loop through the hidden words
		for ($i=1; $i<=3; $i++) {; ?>
				<font class="hidden"><?php echo $randomword[$i]; ?></font>
				<br><br>
		<?php }; ?>
		</center>
	
	

	</body>
</html>
