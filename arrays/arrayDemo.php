<html>
<head>
<body>
<h2>list of age </h2>
<?php
//Indexed array
$x=array("sameer", "ajay", "rohan", "mukul");

	for($i=0;$i<4;$i++)
	{
		echo $x[$i];
		echo "<br>";
	}
//Associative array
	
$age=array("sameer"=>23,"ajay"=>34,"rohan"=>22,"mukul"=>33);

echo "<ul>";	
foreach($age as $key=>$v)
{
	echo "<li>";
	echo "$key age is: $v </li>";
	
}
echo "</ul>";
	
?>
</body>
</head>
</html>
	
