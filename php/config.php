<?php
 $connection = new mysqli('localhost','root','','order');
    
 if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
   }
?>