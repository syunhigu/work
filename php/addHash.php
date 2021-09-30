<pre>
	<?php
		//基本の連想配列を作成
		$result = array(
			"japanese" => 80,
			"math" 	   => 75,
			"science"  => 90,
			"history"  => 85,
			"english"  => 80
		);
		//連想配列の確認
		var_dump($result);

		//mathの点数を上書き
		$result["math"] = 85;
		//連想配列の確認
		var_dump($result);
		//musicの点数を追加
		$result["music"] = 90;
		var_dump($result);
	?>
</pre>