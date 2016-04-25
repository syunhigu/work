<?php
	//変数に論理型を代入
	$true = TRUE;
	$false = FALSE;

	//論理和は1つでもtrueならばtrue、すべてfalseならばfalse
	$a = $true || $true;
	$b = $true || $false;
	$c = $true || $true || $true;
	$d = $true || $false ||$false;
	$e = $true || ($true || $false);
	$f = $false || $false;
	
	var_dump($a,$b,$c,$d,$e,$f);
?>