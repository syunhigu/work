<?php
	//変数に論理型を代入
	$true = TRUE;
	$false = FALSE;

	//&&:論理積はすべてtrueならばtrue、どちらかがfalseならばfalse
	$a = $true && $true;
	$b = $true && $false;
	$c = $true && $true && $true;
	$d = $true && $false && $false;
	$e = $true && ($true && $false);
	
	var_dump($a,$b,$c,$d,$e);
?>