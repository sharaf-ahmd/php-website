<!doctype html>
<html>

<head>
<title>Add Routes</title>
<link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<link href="../css/bg.css" rel="stylesheet" type="text/css">
   <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
</head>

<body>
<a href="../admin_dash.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>
 
  <div id="myform" class="container">
 
<br>
	<h4 style="font-variant: small-caps; text-align: center">Add Routes</h4>
	<br>
	<form action="../php1/Add_routes.php" method="post">
	<div class="form-group row">
<label for="dd" class="col-sm-4 col-form-label" class="sr-only">Route ID</label>
		<div class="col-sm-6">
		<input class="form-control" type="text" id="dd" name="routeid" required maxlength="5"  pattern="(rt)[0-9]{3}" autofocus  >
		</div>
</div>

		    
      <div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label">Bus type</label>
        <div class="col-sm-8">
	    <select class="form-control col-sm-6" name="bt">
	    <option value="Coach"selected>Coach</option>
	    <option value="Mini Coach">Mini Coach</option>
        <option value="Mini Bus">Mini Bus</option>
        <option value="Luxuury Bus">Luxuury Bus</option>
        <option value="Shuttle">Shuttle</option>



	    </select>
        </div> 
        </div>


		
		<div class="form-group row">
		<label class="col-sm-4 col-form-label" for="fn">Departure Town</label>
			<div class="col-sm-6">
				<input id="fn" class="form-control" maxlength="15" name="dtown" pattern="[a-zA-Z]+" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Arrival Town</label>
			<div class="col-sm-6">
				<input id="fn" class="form-control" maxlength="25" name="atown" pattern="[a-zA-Z0-9]+" required="" type="text">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Departure Time</label>
			<div class="col-sm-6">
				<input id="fn" class="form-control" maxlength="25" name="dtime" pattern="[a-zA-Z0-9]+" required="" type="time">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">ArrivalTime</label>
			<div class="col-sm-6">
				<input id="fn" class="form-control" maxlength="25" name="atime" pattern="[a-zA-Z0-9]+" required="" type="time">
			</div>
		</div>

		
		  <div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label" >Travelling Days</label>
        <div class="col-sm-8">
	    <select class="form-control col-sm-6" name="tdays">
	    <option value="Monday"selected>Monday</option>
	    <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
        <option value="Everyday">Everyday</option>


	    </select>
        </div> 
        </div>

           <div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Price</label>
			<div class="col-sm-4">
				<input id="fn" class="form-control" maxlength="25" name="price"  required="" type="text">
			</div>
		</div>
           
	
				<br>
			<div class="form-group row">
			<div class="col-sm-3">
				<button class="form-control btn btn-primary" name="add" type="submit">
				Add Route</button></div>
		</div>
	</form>
</div>

</body>

</html>
