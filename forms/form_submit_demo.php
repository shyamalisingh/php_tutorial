<?php

echo "Welcome";
echo "<br>"; 
echo $_POST["employee_name"];
echo "<br>";
echo "Your email address is:";
echo "<br>";
echo $_POST["email"]; 
echo "<br>";
echo $_POST["phoneNumber"];
echo "<br>";
foreach($_POST["hobbies"] as $hobby)
{
	echo $hobby;
	echo "<br>";
}
echo $_POST["gender"];
echo "<br>";
echo $_POST["lang"];
/*echo $_SERVER["PHP_SELF"];
echo "<br>";
$arrlength=count($_SERVER);
foreach($_SERVER as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }*/
?>
