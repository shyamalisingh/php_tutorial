<?php
echo "welcome";
echo "<br>";
echo $_POST["userName"];
echo "<br>";
echo $_POST["password"];
 $dbConnectLink=mysqli_connect("localhost","shammi","1J2c3e4e","healthy_bite");
	
		if ($dbConnectLink->connect_error) {
			echo 'connection failed';
			die("Connection failed: " . $dbConnectLink->connect_error);
		} 
?>