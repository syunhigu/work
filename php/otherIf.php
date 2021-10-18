<?php $name = "Mary"; ?>
<?php if ($name == "Mary"): ?>
	わたしの名前は<?php echo $name ?>
<?php elseif ($name == "Bob"): ?>
	ぼくの名前は<?php echo $name ?>
<?php else: ?>
	きみの名前は<?php $name ?>
<?php endif; ?>