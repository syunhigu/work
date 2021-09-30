<?php
	//変数に論理型を代入
	$true = TRUE;
	$false = FALSE;

	//trueをfalse、falseをtrueに反転
	$a = !$true;
	$b = !$false;
	$c = !$true && !$true;
	$d = !($true && $true);

	var_dump($a,$b,$c,$d);
?>