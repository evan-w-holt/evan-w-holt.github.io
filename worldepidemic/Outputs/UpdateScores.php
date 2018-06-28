<?php
	$txtcontent = $_REQUEST['txt'];
	$fp = fopen('Leaderboard.txt', w);
	fwrite($fp, $txtcontent);
	fclose($fp);
?>