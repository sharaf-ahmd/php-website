<!doctype html>
<html>

<head>
<title>Bookings</title>
<link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<link href="../css/bg.css" rel="stylesheet" type="text/css">
 <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
</head>

<body>
<a href="../dashboard.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>

<div id="myform" class="container">
	<h4 style="font-variant: small-caps; text-align: center">Bookings</h4>
	<form action="../php1/bookings.php" method="post">
	
			<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="fn">Enter Your Name</label>
			<div class="col-sm-8">
				<input id="fn" class="form-control" maxlength="15" name="name" pattern="[a-zA-Z]+" required="" type="text">
			</div>
		</div>
			<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Number Of Passengers</label>
			<div class="col-sm-4">
				<input id="ps" class="form-control col-sm-10" maxlength="2" value="" name="nop" pattern="[0-9]+" required type="text" onblur="invalidInput(this.id)">
			</div>
					</div>
				
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="from">Departure Town</label>
			<div class="col-sm-4">
				<input id="fro" class="form-control col-sm-10"  name="from" required type="text">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="to">Arrival Town</label>
			<div class="col-sm-4">
				<input id="t" class="form-control col-sm-10"  name="to" required type="text">
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
			<label class="col-sm-4 col-form-label" for="dob">Choose your Gender</label>
			<div class="col-sm-4">
				<div class="form-check form-check-inline">
					<input id="male" checked class="form-check-input" name="gender" type="radio" value="1">
					<label class="form-check-label" for="male">Male</label>
				</div>
				<div class="form-check form-check-inline">
					<input id="female" class="form-check-input" name="gender" type="radio" value="0">
					<label class="form-check-label" for="female">Female</label>
				</div>
			</div>
		</div>
				<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Journey Date and Time</label>
			<div class="col-sm-6">
				<input id="ln" class="form-control" name="Time" required="" type="time">
			</div>
		</div>
		
		<div class="form-group row">
        <label for="ln" class="col-sm-4 col-form-label">Payment Method</label>
        <div class="col-sm-8">
	    <select class="form-control col-sm-6" name="pm">
	    <option value="Pay at the station" selected>Pay at the station</option>
	    </select>
        </div> 
        </div>


			<div class="form-group row">
			<div class="col-sm-3">
			<button class="form-control btn btn-primary" name="add" type="submit">
			Confirm Booking</button></div>
			</div>
		     
		                
               
		
	</form>
</div>


</body>

</html>
