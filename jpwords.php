<?php

header('Content-Type: text/html;charset=utf-8');


function getRandomJPWord() {
	$allJP = getAllJPWords(); //assign a variable for the return value of getAllJPWords()
	$countAllJP = count($allJP); //count the array size
	$randomkey = rand(0, $countAllJP-1); //generate the random key using the $countAllJP
	$randomword = array( //created a new array to hold the randomized results from the $jpwords array
					$allJP[$randomkey]["jpword"],
					$allJP[$randomkey]["yomikata"],
					$allJP[$randomkey]["engdef"],
					$allJP[$randomkey]["jpusage"]
	);
	return $randomword;
}

//create an array containing the text
function getAllJPWords () { //this function was created so that you can access the contents 
	$jpwords = array();     //of the array
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
		"yomikata" => "ごみはこ",
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
		"jpusage" => "この道は快速です。"
	);
	
	$jpwords[7] = array(
		"jpword" => "窓",
		"yomikata" => "まど",
		"engdef" => "window",
		"jpusage" => "窓から富士山に見られます。"
	);
	
	$jpwords[8] = array(
		"jpword" => "歩行者",
		"yomikata" => "ほこうしゃ",
		"engdef" => "pedestrian",
		"jpusage" => "道の横に歩行者が歩いています。"
	);
	
	$jpwords[9] = array(
		"jpword" => "特徴",
		"yomikata" => "とくちょう",
		"engdef" => "characteristics/functions",
		"jpusage" => "この家電は便利な特徴があります。"
	);
	
	$jpwords[10] = array(
		"jpword" => "友人",
		"yomikata" => "ゆうじん",
		"engdef" => "friend",
		"jpusage" => "友人に私のパソコンを使わりました"
	);
	
$jpwords[11] = array(
		"jpword" => "整理",
		"yomikata" => "せいり",
		"engdef" => "to arrange",
		"jpusage" => "部屋で服を整理ました"
	);
	

$jpwords[12] = array(
		"jpword" => "少",
		"yomikata" => "すく",
		"engdef" => "a little, a few e.g. 少ない時間 means 'limited time'",
		"jpusage" => "#"
	);


$jpwords[13] = array(
		"jpword" => "側",
		"yomikata" => "がわ",
		"engdef" => "...side, ",
		"jpusage" => "窓側に友人が座っているんです。"
	);

$jpwords[14] = array(
		"jpword" => "整理",
		"yomikata" => "せいり",
		"engdef" => "to arrange, arrangement",
		"jpusage" => "整理券はさいふに入れました。"
	);

$jpwords[15] = array(
		"jpword" => "亭",
		"yomikata" => "てい",
		"engdef" => "stop, i.e. bus stop",
		"jpusage" => "バス亭はここから５分ぐらいです。"
	);

$jpwords[16] = array(
		"jpword" => "両替",
		"yomikata" => "りょうがえ",
		"engdef" => "to exchange, i.e. currency exchange",
		"jpusage" => "空港に着いたあとに、早く米ドルを両替します。"
	);

$jpwords[16] = array(
		"jpword" => "等",
		"yomikata" => "など",
		"engdef" => "kinds of, articles of...",
		"jpusage" => "自転車等置いていない下さい"
	);

	return $jpwords;
}

	
	
?>