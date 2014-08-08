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
			.hidden { color: white;}
			</style>
		</head>

	<body>
		<?php 
		//$randomkey = rand(0,count($jpwords)-1);
		/*echo count($jpwords)-1;
		echo "<br>";
		echo $randomkey;
		exit;
		*/
		echo getRandomKey();
		exit;
		?>
		
		
		<center>
			<font class="big"><?php echo $jpwords[$randomkey]["jpword"];?></font>
			<br><br>
			<!-- making these text "invisible" by making them white -->
			<font class="hidden" size="36"><?php echo $jpwords[$randomkey]["yomikata"];?></font>
			<br><br>
			<font class="hidden"  size="36"><?php echo $jpwords[$randomkey]["engdef"];?></font>
			<br><br>
			<font class="hidden" size="36"><?php echo $jpwords[$randomkey]["jpusage"]?> </font>
		</center>

	</body>
</html>