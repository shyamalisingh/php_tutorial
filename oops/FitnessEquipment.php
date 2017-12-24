<?php

class GymEquipment{
	
	
	protected $name;
public function setName($name){
	$this->name=$name;

}	
public function using()
{
	echo "using " .$this->name;
	echo "<br>";
	}
public function __construct($name){
$this->name=$name;
echo "<br/> equipment object created";
echo "<br>";

	}

}
?>