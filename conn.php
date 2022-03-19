<?php
	$host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$dbname = "homie";

	$connect = new PDO("mysql:host=$host; dbname=$dbname", $db_user, $db_pass);
?>