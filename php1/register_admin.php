<?php 
print_r($_POST);

require_once('connection.php');

if($_POST['pass']==$_POST['pass1']){
	$pass=($_POST['pass1']);
}else
	echo '<h2>Password is not matched<h2>';  

$sql="INSERT INTO `admin_details` (`firstname`, `lastname`, `password`, `gender`, `age`, `address1`, `address2`, `city`) VALUES ('$_POST[fname]', '$_POST[lname]', '$pass', '$_POST[gender]', '$_POST[age]' , '$_POST[address1]', '$_POST[address2]', '$_POST[city]');";

if (mysqli_query($conn,$sql)) {
  echo "<h2>New passenger created successfully<h2>";
  header('Location:../admin_dash.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>