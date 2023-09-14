<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: dashboard.html");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM passenger_details  WHERE firstname='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.html");
	} else {
		echo "<script>alert('Woops! username or Password is Wrong.')</script>";
	}
}

?>

