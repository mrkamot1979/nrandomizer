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
		"yomikata" => "しょうひでんりょく",
		"engdef" => "electic consumption"
	);

	
?>

<html>
		<head>
			<style>
			.big {
				font-size: 520%;
				color : red;
			}	
			
			.hidden {
				color: white;
			}
			
			
			</style>
		</head>

	<body>
		<center>
			<font class="big"><?php echo $jpwords[101]["jpword"];?></font>
			<br><br>
			<!-- making these text "invisible" by making them white -->
			<font class="hidden" size="36"><?php echo $jpwords[101]["yomikata"];?></font>
			<br><br>
			<font class="hidden"  size="36"><?php echo $jpwords[101]["engdef"];?></font>
		</center>

	</body>
</html>