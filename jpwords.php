<?php

header('Content-Type: text/html;charset=utf-8');
	//create an array containing the text



function randomizeJPWord () {
	<?php 
		$randomkey = rand(0,count($jpwords)-1);
		/*echo count($jpwords)-1;
		echo "<br>";
		echo $randomkey;
		exit;
		*/
		?>
		




}



function getAllJPWords() {
		$jpwords = array();
		$jpwords[0] = array(
			"jpword" => "容量",
			"yomikata" => "ようりょう",
			"engdef" => "capacity",
			"jpusage" => "車の容量は５人です。"
		);
		$jpwords[1] = array(
			"jpword" => "消費電力",
			"yomikata" => "しょうひでんりょく",
			"engdef" => "electic consumption",
			"jpusage" => "毎年の夏に消費電力はいつも高くなります。"	
		);
		
		$jpwords[2] = array(
			"jpword" => "買い替えた",
			"yomikata" => "かいかいた",
			"engdef" => "buy to change",
			"jpusage" => "次のボナースは新しい車を買い替えた。"	
		);
		
		$jpwords[3] = array(
			"jpword" => "宣伝",
			"yomikata" => "せんでん",
			"engdef" => "advertisement",
			"jpusage" => "宣伝によると、今年のモデルのサイズは変わりません。"
		);
		
			
		$jpwords[4] = array(
			"jpword" => "ゴミ箱",
			"yomikata" => "ごみばこ",
			"engdef" => "trashcan",
			"jpusage" => "この公園であんまりゴミ箱がないですようね。"	
		);
		
		$jpwords[5] = array(
			"jpword" => "各駅電車",
			"yomikata" => "かくえきでんしゃ",
			"engdef" => "local train/stops at every station",
			"jpusage" => "次の駅は各駅電車と横浜で止ります。"

		);
		
		$jpwords[6] = array(
			"jpword" => "快速",
			"yomikata" => "かいそく",
			"engdef" => "high speed i.e. train",
			"jpusage" => "#"
		);
		
		$jpwords[7] = array(
			"jpword" => "歩行者",
			"yomikata" => "ほこうしゃ",
			"engdef" => "pedestrian",
			"jpusage" => "#"
		);
		
		$jpwords[8] = array(
			"jpword" => "歩行者",
			"yomikata" => "ほこうしゃ",
			"engdef" => "pedestrian",
			"jpusage" => "#"
		);
		
		$jpwords[9] = array(
			"jpword" => "特徴",
			"yomikata" => "とくちょう",
			"engdef" => "characteristics/functions",
			"jpusage" => "#"
		);
		
		$jpwords[10] = array(
			"jpword" => "友人",
			"yomikata" => "ゆうじん",
			"engdef" => "friend",
			"jpusage" => "#"
		);
		
	$jpwords[11] = array(
			"jpword" => "整理",
			"yomikata" => "せいり",
			"engdef" => "to arrange",
			"jpusage" => "#"
		);
		

	$jpwords[12] = array(
			"jpword" => "少",
			"yomikata" => "すく",
			"engdef" => "a little, a few e.g. 少ない時間 means 'limited time'",
			"jpusage" => "#"
		);
	return $jpwords;
	
}	
	
?>