<!doctype html>
<html>
<head>
<title>Update Bookings</title>
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
<label for="dd" class="col-sm-4 col-form-label" class="sr-only"><b>Enter Your First Name</b></label>
		<div class="col-sm-4">
		<input class="form-control" type="text" id="dd" name="searchdoctorid" required maxlength="20"   autofocus>
		</div>
		<div class="col-sm-4">
		<input class="form-control btn btn-primary" type="submit" id="dd" name="searchdoctor" value="Search Booking">
		</div>

</div>
<?php
if(isset($_POST['searchdoctor'])){//check whether you have click the submit button or not
require_once('../php1/connection.php');
$docid=$_POST['searchdoctorid'];
$sql="select * from `bookings` where name='$docid'";
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
<h4  style="font-variant:small-caps;text-align:center">Update Booking</h4>

<form action="../php1/update_booking.php" method="post" enctype="multipart/form-data">
	<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="fn">Enter Your Name</label>
			<div class="col-sm-8">
				<input id="fn" class="form-control" maxlength="15" name="name" pattern="[a-zA-Z]+" required="" type="text" readonly value="<?php echo $row['name'] ?>">
			</div>
		</div>
			<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Number Of Passengers</label>
			<div class="col-sm-4">
				<input id="ps" class="form-control col-sm-10" maxlength="2"  name="nop" pattern="[0-9]+" required type="text"  value="<?php echo $row['no_of_passenger'] ?>">
			</div>
					</div>
				
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="from">Departure Town</label>
			<div class="col-sm-4">
				<input id="fro" class="form-control col-sm-10"  name="from" required type="text"  value="<?php echo $row['from'] ?>">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="to">Arrival Town</label>
			<div class="col-sm-4">
				<input id="t" class="form-control col-sm-10"  name="to" required type="text"  value="<?php echo $row['to'] ?>">
			</div>
		</div>
		    
        <div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label">Bus type</label>
        <div class="col-sm-8">
	    <select class="form-control col-sm-6" name="bt">
	    <option value="Coach" <?php if($row['bus_type']=='Coach') echo 'selected'?>>Coach</option>
	    <option value="Mini Coach" <?php if($row['bus_type']=='Mini Coach') echo 'selected'?>>Mini Coach</option>
        <option value="Mini Bus" <?php if($row['bus_type']=='Mini Bus') echo 'selected'?>>Mini Bus</option>
        <option value="Luxuury Bus" <?php if($row['bus_type']=='Luxury Bus') echo 'selected'?>>Luxuury Bus</option>
        <option value="Shuttle" <?php if($row['bus_type']=='Shuttle') echo 'selected'?>>Shuttle</option>



	    </select>
        </div> 
        </div>

			<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="dob">Choose your Gender</label>
			<div class="col-sm-4">
				<div class="form-check form-check-inline">
					<input id="male" checked class="form-check-input" name="gender" type="radio" value="1" readonly <?php if($row['gender']==1) echo 'checked'; ?>>
					<label class="form-check-label" for="male">Male</label>
				</div>
				<div class="form-check form-check-inline">
					<input id="female" class="form-check-input" name="gender" type="radio" value="0" readonly <?php if($row['gender']==0) echo 'checked'; ?>>
					<label class="form-check-label" for="female">Female</label>
				</div>
			</div>
		</div>
				<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Journey Date and Time</label>
			<div class="col-sm-8">
				<input id="ln" class="form-control" name="date" type="time" value="<?php echo $row['date'] ?>">
			</div>
		</div>
		
		<div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label">Payment Method</label>
        <div class="col-sm-8">
	    <select class="form-control col-sm-6" name="pm">
	    <option value="Pay at the station"  selected>Pay at the station</option>
	    </select>
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
 <button type="submit" class="form-control btn btn-primary" name="update">Update Passenger Details</button>
   </div> 

</form>
</div>
<?php 
}
}      
 ?>
</body>
</html>
