<?php
	$sname= "127.0.0.1";
	$unmae= "root";
	$password = "";

	$db_name = "id16025034_airsoftstore";

	$conn = mysqli_connect($sname, $unmae, $password, $db_name, 3306);

	if (!$conn) {
		echo "Connection failed!";
	}

