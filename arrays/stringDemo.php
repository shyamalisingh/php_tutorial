<html>
<head>
<body>
<h2>

	<?php
	//first example of print string
	$x="rajesh";
	echo "hello $x <br> welcome php course!";
	
	//example of calculating string length:
	
	$name="<br>sameer";
	$len=strlen($name);
	echo "$name has $len characters";
	
	//example of string convert to upper case:
	
	$y="<br> rahul";
	$up=strtoupper($y);
	echo "$y convert to upper case: $up";
	
	//example of string convert to lower case:
	
	$yz="<br> AMIT";
	$low=strtolower($yz);
	echo "$yz convert to lower case: $low";
	
	//example of compare two strings:
	
	$name1="shyamali";
	$name2="shammi";
	$cmp=strcmp($name2,$name1);
	echo "<br>compare betweem $name1 and $name2 and result is: $cmp";
	
	
	?>
</h2>
</body>
</head>
</html>
