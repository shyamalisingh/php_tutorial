<?php
//numeri array
$x=array("sameer", "ajay", "rohan", "mukul");

	/*echo $x[0];
	echo "<br>";
	echo $x[1];
	echo "<br>";
	echo $x[2];
	echo "<br>";
	echo $x[3];*/
	
	for($i=0;$i<4;$i++)
	{
		echo $x[$i];
		echo "<br>";
	}
	
$y=array("sameer"=>23,"ajay"=>34,"rohan"=>22,"mukul"=>33);

	echo $y["sameer"];
	echo"<br>";
	echo $y["ajay"];
	echo"<br>";
	echo $y["rohan"];
	echo"<br>";
	echo $y["mukul"];
	echo"<br>";
	
?>
