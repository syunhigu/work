<?php
	$fruit = array("イチゴ","りんご","バナナ");
	$vegetable = array("きゅうり","かぼちゃ","じゃがいも");

	$foods = array($fruit,$vegetable);

	foreach ($foods as $type => $name) {
			echo $type.":".$name."<br>";
	}
?>