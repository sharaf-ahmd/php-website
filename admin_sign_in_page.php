<?php 

include 'php1/connection.php';



error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['username'];
	$password =($_POST['password']);

	$sql = "SELECT * FROM admin_details WHERE firstname='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
    		header("Location: admin_dash.html");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>

<html>
<head>
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
    <link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Sign in</title>


</head>
<body background="images/2.jpg">

      
         <div class="form-container">
         
         <a href="Europe_bus.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>

         <div class="signin">

         	<form  action="" method="post"  class="login">
         		<h2 class="title">Sign in <i class="fa fa-user"></i></h2>
                      		<div class="input">
         			<i class="fa fa-user"></i>

         			<input type="text" placeholder="Username" name="username" value="<?php echo $User ?>"></input>
         		</div>


         		<div class="input">
         		<i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']?>" ></input>
         		
         	                  
                  <div>
                    <button class="btn" name="submit">Sign in</button>
               </div>
               

             
          	</div>
         			</form>


        </div>
        </div>


</body>
</html>