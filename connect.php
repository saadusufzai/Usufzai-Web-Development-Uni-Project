<?php

	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $plan = $_POST['plan'];
	// $method = $_POST['method'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','order');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	?>