<?php
	$results = array(
		"math" => 90,
		"english" => 80,
		"japanese" => 85);

		//配列 as ループ内変数名
		foreach ($results as $score) {
			echo $score."<br>";
		}
?>