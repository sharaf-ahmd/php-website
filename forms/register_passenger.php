<!doctype html>
<html>

<head>
<title>Sign up</title>
<link href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<link href="../css/bg.css" rel="stylesheet" type="text/css">
</head>

<body>
  
    <a href="dashboard.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>

<div id="myform" class="container">
<br>
	<h4 style="font-variant: small-caps; text-align: center">Sign up</h4>
	<br>
	<form action="../php1/register_pass.php" method="post">
				<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="fn">Enter First Name</label>
			<div class="col-sm-8">
				<input id="fn" class="form-control" maxlength="15" name="fname" pattern="[a-zA-Z]+" required="" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="fn">Enter Last Name</label>
			<div class="col-sm-8">
				<input id="fn" class="form-control" maxlength="15" name="lname" pattern="[a-zA-Z]+" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Enter Password</label>
			<div class="col-sm-8">
				<input id="pass" class="form-control" maxlength="25" name="pass" pattern="[a-zA-Z0-9]+" required="" type="password">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="ln">Confirm Password</label>
			<div class="col-sm-8">
				<input id="pass1" class="form-control" maxlength="25" name="pass1" pattern="[a-zA-Z0-9]+" required="" type="password">
			</div>
		</div>
	
		
		<div class="form-group row">
			<label class="col-sm-4">Enter Age</label>
			<div class="col-sm-4">
				<input id="ln" class="form-control col-sm-10" maxlength="2" name="age" pattern="[0-9]+" required type="text">
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
			<div class="col-sm-4">
				<div class="form-check form-check-inline">
					<label class="col-sm-4 form-check-label" for="ad1">Address1</label>
					<input id="ad1" class="form-control" name="address1" required="" type="text">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-check form-check-inline">
					<label class="col-sm-4 form-check-label" for="ad2">Address2</label>
					<input id="ad2" class="form-control" name="address2" type="text">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-check form-check-inline">
					<label class="col-sm-4 form-check-label" for="c">City</label>
					<input id="c" class="form-control" name="city" pattern="[a-zA-Z]+" required="" type="text">
				</div>
			</div>
		</div>
		<br>
			<div class="form-group row">
			<div class="col-sm-3">
				<button class="form-control btn btn-primary" name="add" type="submit">
				Sign up</button></div>
		</div>
	</form>
</div>

</body>

</html>
