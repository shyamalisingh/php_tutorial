<?php
 class Cab{
	 public $registration;
	 private $car_name;
	 private $car_type;
	 
	 public function cab_booking($customer)
	 {
		 echo "<br>";
	     echo "car-name ".$this->car_name." of type ".$this->car_type." is booked by".$customer->name;
		 echo "<br>";
		 
	 }
	 public function __construct($name,$type){
		$this->car_name=$name;
		$this->car_type=$type;
		echo "<br/> Car object created";
 }
 }
 ?>