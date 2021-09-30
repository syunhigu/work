<?php
	$i = 0;
	if ($i == 0) {
		echo "iは0に等しい";
	} elseif ($i == 1) {
		echo "iは1に等しい";
	} else {
		echo "iは0と1のどちらでもない";
	}

	switch ($i) {
		case 0:
			echo "iは0に等しい";
			break;
		case 1:
			echo "iは1に等しい";
			break;
		default:
			echo "iは0と1のどちらでもない";
			break;
	}
?>