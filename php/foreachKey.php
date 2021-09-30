<?php
	$results = array(
		"math" => 90,
		"english" => 80,
		"japanese" => 85);
		//配列 as キーの変数名 => ループ内変数名
		foreach ($results as $title => $score) {
			echo $title.":".$score."<br>";
		}
?>