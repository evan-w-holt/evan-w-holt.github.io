<?php
	$txtcontent = $_POST['txt'];
	$fp = fopen('Leaderboard.txt', 'w');
	fwrite($fp, $txtcontent);
	fclose($fp);
	echo $txtcontent
?>