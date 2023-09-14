
<?php 
require_once('connection.php');




$sql="SELECT * from bookings where `bookings`.`name` ='$_POST[name]';"; 
 

$res=mysqli_query($conn,$sql);

$sql="DELETE FROM `bookings` WHERE `bookings`.`name` ='$_POST[name]'";


$res=mysqli_query($conn,$sql);
if($res){
	echo "<h2>Booking cancelled successfully</h2>";
	header('Location:../dashboard.html');
	}else
	echo "<h2>Error in SQL".mysqli_error (). "</h2>";

mysqli_close($conn);

?>