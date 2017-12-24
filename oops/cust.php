<?php
	class Customer{
	public $name;
	private $age;
	public $address;
	
	public function ptint_custinfo()
	
	{
		echo "<br>";
		echo "cust_name is ".$this->name."cust_age is ".$this->age."cust_add is ".$this->address;
		echo "<br>";
	}	
	 public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
		echo "<br/> cust obj created";
	}
}

?>