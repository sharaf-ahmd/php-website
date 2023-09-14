<!doctype html>
<html>
<head>
<title>Updating passenger</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link href="../css/background.css" rel="stylesheet" type="text/css">
<script src="https://use.fontawesome.com/b9d79ea055.js"></script>
</head>
<body>
<a href="../dashboard.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
<div class="container" id="myform">
<div class="form-group row">
<label for="dd" class="col-sm-4 col-form-label" class="sr-only"><b>Enter Your Name </b></label>
		<div class="col-sm-4">
		<input class="form-control" type="text" id="dd" name="searchdoctorid" required maxlength="20"   autofocus>
		</div>
		<div class="col-sm-4">
		<input class="form-control btn btn-primary" type="submit" id="dd" name="searchdoctor" value="View Profile">
		</div>

</div>
<?php
if(isset($_POST['searchdoctor'])){//check whether you have click the submit button or not
require_once('../php1/connection.php');
$docid=$_POST['searchdoctorid'];
$sql="select * from `passenger_details` where firstname='$docid'";
$result=mysqli_query($conn,$sql);

if( mysqli_num_rows($result)==0){
		echo '<div class="alert alert-danger" role="alert">
		  There is no record found!
		</div>'; 
}else{
$row=mysqli_fetch_assoc($result);
  ?>
</div>
</form>
<div class="container" id="myform">
<h4  style="font-variant:small-caps;text-align:center">Update Profile </h4>

<form action="../php1/update_pass.php" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label for="dd" class="col-sm-4 col-form-label" class="sr-only">Passenger ID</label>
		<div class="col-sm-8">
		<input class="form-control" type="text" id="dd" name="doctorid" required maxlength="6"  pattern="[a-zA-Z]+" autofocus readonly value="<?php echo $row['passenger_id'] ?>" >
		</div>
</div>

<div class="form-group row">
		<label for="fn" class="col-sm-4 col-form-label">Enter First Name</label>
		<div class="col-sm-8">
		<input class="form-control" type="text" id="fn" name="fname" required maxlength="15"  pattern="[a-zA-Z]+" readonly value="<?php echo $row['firstname'] ?>" >
		</div>
</div>

<div class="form-group row">
		<label for="ln" class="col-sm-4 col-form-label">Enter Last Name</label>
		<div class="col-sm-8">
		<input class="form-control" type="text" id="ln" name="lname"  maxlength="25"  pattern="[a-zA-Z\s]+" required value="<?php echo $row['lastname'] ?>">
		</div>
</div>

<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Enter Password</label>
			<div class="col-sm-8">
				<input id="pass" class="form-control" maxlength="25" name="pass" pattern="[a-zA-Z0-9]+" required value="<?php echo $row['password'] ?>" type="text">
			</div>
		</div>



		<div class="form-group row">
			<label class="col-sm-4">Enter Age</label>
			<div class="col-sm-4">
				<input id="ln" class="form-control col-sm-10" maxlength="2" name="age" pattern="[0-9]+" required type="text" value="<?php echo $row['age'] ?>">
			</div>


<div class="form-group row">
<label for="dob" class="col-sm-4 col-form-label">Choose your Gender</label>
<div class="col-sm-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="male" value="1"  <?php if($row['gender']==1) echo 'checked'; ?>  >
  <label class="form-check-label" for="male">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="0" value="female" <?php if($row['gender']==0) echo 'checked';  ?> >
  <label class="form-check-label" for="female">Female</label>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-4">
<div class="form-check form-check-inline">
  <label class="col-sm-4 form-check-label" for="ad1">Address1</label>
  <input  type="text" name="address1" id="ad1" required class="form-control" value="<?php echo $row['address1'] ?>" >
</div>
</div>
<div class="col-sm-4">
<div class="form-check form-check-inline">
  <label class="col-sm-4 form-check-label" for="ad2">Address2</label>
  <input  type="text" name="address2" id="ad2" class="form-control" value="<?php echo $row['address2'] ?>">
</div>
</div>
<div class="col-sm-4">
<div class="form-check form-check-inline">
  <label class="col-sm-4 form-check-label" for="c">City</label>
  <input  type="text" name="city" id="c" pattern="[a-zA-Z0-9\s]+"required class="form-control" value="<?php echo $row['city'] ?>">
</div>
</div>
</div>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }    
  };    
</script>

<div class="col-sm-3">
 <button type="submit" class="form-control btn btn-primary" name="update">Update Profile</button>
   </div> 

</form>
</div>
<?php 
}
}      
 ?>
</body>
</html>
