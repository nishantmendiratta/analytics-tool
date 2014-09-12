<?php
	require_once 'config.php';
	require_once 'connect_db.php';

	if (isset($_POST['UAID'])){
		$token = $_POST['UAID'];
		$sql = "SELECT * FROM `Websites` WHERE UAID ='$token'";
		$result = mysqli_query($con,$sql);
		$num_rows = mysqli_num_rows($result);
		if($num_rows==1)
			echo "true";
		else
			echo "false";
	}
?>