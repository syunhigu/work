<?php
	//お名前
	$name = $_POST['name'];
	//性別
	$gender = $_POST['gender'];
	if ($gender == "man") {
		$gender = "男性";
	} elseif ($gender == "woman") {
		$gender = "女性";
	} else {
		$gender = "不正な値";
	}
	//評価(変数の値を整数として返す)
	$tmp_star = intval($_POST['star']);
	//出力用
	$star = '';
	//$tmp_starが1より小さく、5より大きい場合は不正な値と表示
	if ($tmp_star < 1 || $tmp_star > 5) {
		$star = "不正な値";
	} else {
		//送信された数字の数だけ★を追加
		for ($i=0; $i < $tmp_star; $i++) { 
			$star .= '★';
		}
		//☆は5-送信された数分だけ追加
		for ($i; $i < 5; $i++) { 
			$star .= '☆';
		}
	}
	//ご意見
	$other = $_POST['other'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>アンケート結果</title>
</head>
<body>
	<h1>アンケート結果</h1>
	<p>お名前：<?php echo $name; ?></p>
	<p>性別：<?php echo $gender; ?></p>
	<p>評価：<?php echo $star; ?></p>
	<p>ご意見：<?php echo nl2br($other,false); ?></p>
</body>
</html>