<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=".././css/style.css" />
    <link rel="stylesheet" href=".././css/connect.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body>
    <div class="slider">
        <div class="menus">
          <i class="close fa fa-times fa-3x" aria-hidden="true"></i>
          <ul>
            <li><a href="./index.html">home  <span>home is where you start</span></a></li>
            <li><a href="./about.html">about  <span>know more about our work</span> </a></li>
            <li><a href="./order.html">order  <span>order your package now</span></a></li>
            <li><a href="./contact.html">contact  <span>confused? contact us right now</span></a></li>
          </ul>
        </div>
      </div>
      <nav class="nav-bar">
        <div class="inner-nav">
            <div class="logo"><a href="./index.html">TECHWA</a></div>
          <div class="menu">
            <i class=" bars fa fa-bars fa-2x" aria-hidden="true"></i>
          </div>
        </div>
	  </nav>
	  
 

	  <?php
	
	$fname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
		$conn = new mysqli('localhost','root','','order');
	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		  }
			 $sql = "INSERT INTO siginup(name,email,password) VALUES ('$fname','$email','$password')";
	
	
		if($conn->query($sql) === TRUE){
			echo'<div class="success">
					<div class="success-box">
					<h1>Thanks for choosing TECHWA </h1>
					<p>You have been signup</p>
					<a style="color:orange; font-size:20px" class="link" href="../login.html">LOGIN NOW</a>
					</div>
			</div> 
			';
			}
		else{
			echo ' <h1>NOT SAVED</h1>';
	
		}
		
	
	?>

	  <section class="see-more">
        <p>Need help? Call our award-winning support team at +92 332 687 7676</p>
      </section>
      <footer>
        <div class="inner-footer">
            <ul>
              <h3>Web Hosting</h3>
              <li>CPanel</li>
              <li>WHMS</li>
              <li>DOMAIN</li>
            </ul>
            <ul>
              <h3>Web Design Tools</h3>
              <li>Adobe XD</li>
              <li>Figma</li>
              <li>PhotoShop</li>
            </ul>
            <ul>
              <h3>VPS</h3>
              <li>Cloud</li>
              <li>Private Server</li>
              <li>Dedicated Server</li>
            </ul>
            <ul>
              <h3>Contact Us</h3>
              <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 120-N Mandi Town Bhakkar</li>
              <li> <i class="fa fa-envelope" aria-hidden="true"></i>  saadusufzai@gmail.com</li>
              <li> <i class="fa fa-link" aria-hidden="true"></i> www.techwa.io</li>
              <li> <i class="fa fa-phone" aria-hidden="true"></i>  03326877676</li>
            </ul>
        </div>
        <div class="social">
          <input type="text" name="Newsletteer" id="newsletter" placeholder="Subscribe to Newsletters">
        </div>
  
        <div class="copyright">
          Copyright 2020  techwa.io | All rights are reserved by TECHWA.IO | Developed by Saad Aslam & Talha Maiken
        </div>
      </footer>
      <script src="../main.js"></script>
      <script src="./db_connection.js"></script>
</body>
</html>











