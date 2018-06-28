<?php
	if(isset($_POST['txt'])){
		file_put_contents("Leaderboard.txt", $_POST['txt']);
		echo "uploaded.";
	}else{
		echo "invalid."
	}
?>