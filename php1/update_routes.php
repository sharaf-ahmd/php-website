<?php 
require_once('connection.php');//conecct to the database

$sql="UPDATE `routes` SET `bus_type` = '$_POST[bt]', `departure_town` = '$_POST[dtown]', `arrival_town` = '$_POST[atown]', `departure_time` = '$_POST[dtime]', `arrival_time` = '$_POST[atime]',`price` = '$_POST[price]' WHERE `routes`.`r_id` = '$_POST[routeid]';";
		

   if (mysqli_query($conn,$sql)) {
  echo "<h2>Route updated successfully<h2>";
  header('Location:../admin_dash.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

	
?>
<?php 
