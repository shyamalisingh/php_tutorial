<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<form class="form" method="POST" action="form_submit_demo.php">
				<div class="form-group">
					<label class="form-label">Name:</label>
					<input type="textfield" class="form-control" name="employee_name"></input>
				</div>
				<div class="form-group">
					<label class="form-label">Email:</label>
					<input type="textfield" class="form-control" name="email"></input>
				</div>
				<div class="form-group">
					<label class="form-label">phone Number:</label>
					<input type="textfield" class="form-control" name="phoneNumber"></input>
				</div>
				<div class="form-group">
				<label class="form-label">Hobbies:</label>
				<input type="checkbox" name="hobbies[]" value="singing"> singing</input>
				<input type="checkbox" name="hobbies[]" value="dancing">dancing</input>
				<input type="checkbox" name="hobbies[]" value="painting">painting</input>
			</div>
				<div class="form-group">
				<label class="form-label">Gender:</label>
				<input type="radio" name="gender" value="male" checked > Male</input>
				<input type="radio" name="gender" value="female"> Female</input>
				<input type="radio" name="gender" value="other"> Other </input> 
				</div>
				<div class="form-group">
				<label class="form-label">Languages Know:</label>
				<select name="lang">
                <option value="Java">Java</option>
				<option value="Php">PHP</option>
				<option value="Oracle">Oracle</option>
				<option value="Python">Python</option>
				</select>
				<div class="form-group">
					<input type="submit" class="btn btn_submit"></input>
				</div>
				
				
			</form>
		</div>
	</body>
</html>
<!-- Global Array $_SERVER['PHP_SELF'] -->