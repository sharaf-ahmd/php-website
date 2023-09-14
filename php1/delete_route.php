
<?php 
require_once('connection.php');




$sql="SELECT * from routes where `routes`.`r_id` ='$_POST[routeid]';"; 
 

$res=mysqli_query($conn,$sql);

$sql="DELETE FROM `routes` WHERE `routes`.`r_id` ='$_POST[routeid]'";


$res=mysqli_query($conn,$sql);
if($res){
	echo "<h2>Route deleted successfully</h2>";
	header('Location:../admin_dash.html');
	}else
	echo "<h2>Error in SQL".mysqli_error (). "</h2>";

mysqli_close($conn);

?>