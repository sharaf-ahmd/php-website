<?php 
$conn=mysqli_connect('127.0.0.1:3944','root','','europe_bus');

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());//true block
}else{
	//echo "<h2>Connected successfully</h2>";//false block
}

 ?>