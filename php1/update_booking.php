<?php 
require_once('connection.php');//conecct to the database

$sql="UPDATE `bookings` SET `name`= '$_POST[name]', `no_of_passenger` = '$_POST[nop]', `from` = '$_POST[from]', `to` = '$_POST[to]', `bus_type` = '$_POST[bt]', `gender` = '$_POST[gender]', `date` = '$_POST[date]' WHERE `bookings`.`name` = '$_POST[name]';";
		

   if (mysqli_query($conn,$sql)) {
  echo "<h2>passenger updated successfully<h2>";
  header('Location:../dashboard.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

	
?>
<?php 
