	<!doctype html>
<html>
<head>
<title>Delete Routes</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link href="../css/background.css" rel="stylesheet" type="text/css">
<script src="https://use.fontawesome.com/b9d79ea055.js"></script>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
<a href="../admin_dash.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>
<div class="container" id="myform">
<div class="form-group row">
<label for="dd" class="col-sm-4 col-form-label" class="sr-only"><b>Enter Route ID</b></label>
		<div class="col-sm-4">
		<input class="form-control" type="text" id="dd" name="routeid" required maxlength="20"   autofocus>
		</div>
		<div class="col-sm-4">
		<input class="form-control btn btn-primary" type="submit" id="dd" name="searchdoctor" value="Search Route">
		</div>

</div>
<?php
if(isset($_POST['searchdoctor'])){//check whether you have click the submit button or not
require_once('../php1/connection.php');
$sql="select * from `routes` where r_id='$_POST[routeid]'";
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
<h4  style="font-variant:small-caps;text-align:center">Cancel Routes</h4>

<form action="../php1/delete_route.php" method="post" enctype="multipart/form-data">
	   <div class="form-group row">
          <label for="dd" class="col-sm-4 col-form-label" class="sr-only">Route ID</label>
		  <div class="col-sm-6">
		  <input class="form-control" type="text" id="dd" name="routeid" required maxlength="5"  pattern="(rt)[0-9]{3}" autofocus readonly value="<?php echo $row['r_id'] ?>"  >
		  </div>
       </div>

			 <div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label" unselectable="on">Bus type</label>
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
			<label class="col-sm-4 col-form-label" for="from">Departure Town</label>
			<div class="col-sm-4">
				<input id="fro" class="form-control col-sm-10"  name="dtown" required type="text" readonly value="<?php echo $row['departure_town'] ?>">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="to">Arrival Town</label>
			<div class="col-sm-4">
				<input id="t" class="form-control col-sm-10"  name="atown" required type="text" readonly value="<?php echo $row['arrival_town'] ?>">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="from">Departure time</label>
			<div class="col-sm-4">
				<input id="fro" class="form-control col-sm-10"  name="dtime" required type="text" readonly value="<?php echo $row['departure_time'] ?>">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="to">Arrival Time</label>
			<div class="col-sm-4">
				<input id="t" class="form-control col-sm-10"  name="atime" required type="text" readonly value="<?php echo $row['arrival_time'] ?>">
			</div>
		</div>
		
		  <div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Price</label>
			<div class="col-sm-4">
				<input id="fn" class="form-control" maxlength="25" name="price"  required="" type="text" readonly value="<?php echo $row['price'] ?>">
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
 <button type="submit" class="form-control btn btn-primary" name="update">Delete Route</button>
   </div> 

</form>
</div>
<?php 
}
}      
 ?>
</body>
</html>
