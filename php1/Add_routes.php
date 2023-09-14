<?php 
print_r($_POST);

require_once('connection.php');

$sql="INSERT INTO `Routes` (`r_id`, `bus_type`, `departure_town`, `arrival_town`, `departure_time`, `arrival_time`,	`travelling_days`, `price`) VALUES ('$_POST[routeid]', '$_POST[bt]', '$_POST[dtown]', '$_POST[atown]', '$_POST[dtime]' , '$_POST[atime]', '$_POST[tdays]', '$_POST[price]');";

if (mysqli_query($conn,$sql)) {
  echo "<h2>New passenger created successfully<h2>";
  header('Location:../admin_dash.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>