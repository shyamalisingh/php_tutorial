<?php
 function display($name)
 {
	
	 echo "$name";
	 echo "<br>";
 }
 display("shammi");
 echo "<br>";
 display("nupur");
 // add function
 function add($num1,$num2)
 {
	 return $num1+$num2;
	 
	
 }
$sum= add(3,4);
 echo "$sum";
 echo "<br>";
 $sum=add(12,14);
 echo "$sum";
 
?>