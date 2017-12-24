<?php
$dbConnectLink=mysqli_connect("localhost","shammi","1J2c3e4e","ecoshuttle");
	
if ($dbConnectLink->connect_error) {
	echo 'connection failed';
	die("Connection failed: " . $dbConnectLink->connect_error);
} 
$pickUp_locations= $_POST["pickUp_locations"];
$drop_locations= $_POST["drop_locations"];
echo "Your pick up location is".$pickUp_locations."<br/>";
echo "Your drop location is".$drop_locations."<br/>";
 if (isset($_POST["features"])){ 
	foreach ($_POST["features"] as $feature) { 
		print "You want a $feature car. <br/>"; 
	} 
 }

 //Insert query
 
$sql ="INSERT INTO bookings (pick_Up_location,drop_location)
		VALUES ('$pickUp_locations', '$drop_locations')";
	if($dbConnectLink->query($sql)=== TRUE) {
			echo "new record created successfully";
			} else {
			echo "error" . $sql . "<br>" . $dbConnectLink->error;
			}
		$dbConnectLink->close();
		
		
?>
		