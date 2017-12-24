<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Demo</title>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>
</head>
	<body>
		<div class="container">
		
			<form class="form" method="POST" action="booking_submit_demo.php">
				<div class="form-group">
					<label class="form-label">PICK-UP LOCATION:</label>
					<select name="pickUp_locations" class="form-control">
					<option selected>Choose here</option>
					 <option value="powai">POWAI</option>
					 <option value="lokhandwala">LOKHANDWALA</option>
					 <option value="kandivali">KANDIVALI</option>
					 </select>
				</div>
			
			<div class="form-group">
					<label class="form-label">DROP LOCATION:</label>
					<select name="drop_locations" class="form-control">
					<option selected >Choose here</option>
					 <option value="powai">POWAI</option>
					 <option value="lokhandwala">LOKHANDWALA</option>
					 <option value="kandivali">KANDIVALI</option>
					 </select>
				</div>
			<div class="form-group">
				<input type="checkbox" name="features[]" value="wi-fi"> wi-fi<br>
				<input type="checkbox" name="features[]" value="AC">AC CAR<br>
				<input type="checkbox" name="features[]" value="music">SOUND SYSTEM<br>
			</div>
				
				
			<div class="form-group">
					<input type="submit" class="btn btn_submit" class="form-control"></input>
					
				</div>
			</form>
		</div>
	</body>
</html>
			