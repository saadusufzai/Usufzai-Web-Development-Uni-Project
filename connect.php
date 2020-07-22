
    
<?php
$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $plan = $_POST['plan'];
	// $option = $_POST['option'];
	// $method = $_POST['method'];
	

	// // Database connection
	// $conn = new mysqli('localhost','username','password','techwa_order');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into registration(name, email, plan, option, method) values(?, ?, ?, ?, ?)");
	// 	$stmt->bind_param("sssssi", $name, $email, $plan, $method, $option);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Registration successfully...";
	// 	$stmt->close();
	// 	$conn->close();
	// }
