<?php


	$name = $_POST['name'];
	$email = $_POST['email'];
	$plan = $_POST['plan'];
	$option = $_POST['option'];
	$method = $_POST['method'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','order');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, package, pay_method) values( ?, ?, ?, ?)");
		$stmt->bind_param($name, $email, $plan, $method);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>



	