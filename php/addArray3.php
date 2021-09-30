<pre>
	<?php
	$friends = array("はるき","かおる","ひでと","まさとし","たかのり");
	//配列に"ともゆき"を追加
	array_push($friends, "ともゆき");
	var_dump($friends);

	//array_pushで複数個追加
	array_push($friends, "ゆうた","てつや");
	var_dump($friends);
	?>
</pre>