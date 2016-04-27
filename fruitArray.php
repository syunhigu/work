<?php
	$foods = array(
		"fruit" => array("いちご","りんご","バナナ")
		"vegetable" => array("きゅうり","かぼちゃ","じゃがいも"));

	foreach ($foods as $type => $name) {
			echo $type.":".$name."<br>";
	}
?>