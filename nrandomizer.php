<?php
	//make sure to set the characterset to UTF-8
	header('Content-Type: text/html;charset=utf-8');
	//create an array containing the text
	$jpwords = array();
	$jpwords[0] = array(
		"jpword" => "容量",
		"yomikata" => "ようりょう",
		"engdef" => "capacity"
	);
	$jpwords[1] = array(
		"jpword" => "消費電力",
		"yomikata" => "しょうひでんりょく",
		"engdef" => "electic consumption"
	);
	
	$jpwords[2] = array(
		"jpword" => "買い替えた",
		"yomikata" => "かいかいた",
		"engdef" => "buy to change"
	);
	
	$jpwords[3] = array(
		"jpword" => "宣伝",
		"yomikata" => "宣伝",
		"engdef" => "advertisement"
	);
	
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
		$randomkey = rand(0,3);
		?>
		
		
		<center>
			<font class="big"><?php echo $jpwords[$randomkey]["jpword"];?></font>
			<br><br>
			<!-- making these text "invisible" by making them white -->
			<font class="hidden" size="36"><?php echo $jpwords[$randomkey]["yomikata"];?></font>
			<br><br>
			<font class="hidden"  size="36"><?php echo $jpwords[$randomkey]["engdef"];?></font>
		</center>

	</body>
</html>