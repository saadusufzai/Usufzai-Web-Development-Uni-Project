<?php
	
$fname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


	$conn = new mysqli('localhost','root','','order');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
		 $sql = "INSERT INTO signup(name,email,password) VALUES ('$fname','$email','$password')";


	if($conn->query($sql) === TRUE){
		echo'<div class="success">
				<div class="success-box">
				<h1>Thanks for choosing TECHWA </h1>
				<p>You have been signup</p>
				<a style="color:black;" class="link" href="./login.html">Login</a>
				</div>
		</div> 
		';
		}
	else{
		echo ' <h1>NOT SAVED</h1>';

	}
	

?>