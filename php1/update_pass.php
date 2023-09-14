<?php 
require_once('connection.php');//conecct to the database

$sql="UPDATE `passenger_details` SET `firstname`= '$_POST[fname]', `lastname` = '$_POST[lname]', `age` = '$_POST[age]', `gender` = '$_POST[gender]', `address1` = '$_POST[address1]', `address2` = '$_POST[address2]', `city` = '$_POST[city]' WHERE `passenger_details`.`passenger_id` = '$_POST[doctorid]';";
		

   if (mysqli_query($conn,$sql)) {
  echo "<h2>passenger updated successfully<h2>";
  header('Location:../dashboard.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

	
?>
<?php 
