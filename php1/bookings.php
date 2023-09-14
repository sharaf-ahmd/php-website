<?php 
print_r($_POST);

require_once('connection.php');



 	
  
  

$sql="INSERT INTO `bookings` (`name`, `no_of_passenger`, `from`, `to`, `bus_type`, `gender`, `date`, `payment`) VALUES ( '$_POST[name]',  '$_POST[nop]', '$_POST[from]', '$_POST[to]', '$_POST[bt]', '$_POST[gender]', '$_POST[Time]', '$_POST[pm]');";

if (mysqli_query($conn,$sql) && isset($_POST['add'])) {
 
  {
    header('Location:../dashboard.html');
   }
 } 
 else
  {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

   
mysqli_close($conn);

?>

