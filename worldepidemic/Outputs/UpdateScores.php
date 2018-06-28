<?php
	if(isset($_POST['txt']) && isset($_POST['file'])){
		file_put_contents($_POST['file'].".txt", $_POST['txt']);
		echo "uploaded.";
	}else{
		echo "invalid.";
	}
?>