<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'blog';
	$conn = new mysqli($servername, $username, $password, $db);
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
	else{
		//echo "Yeah it works";
	}
?>