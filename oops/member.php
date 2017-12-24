<?php
class Member{
	public $name;
	public $age;
	private $phoneNumber;
	public function member_details()
 {
	
	 echo $this->name;
	 echo "<br>";
	 echo $this->age;
	 echo "<br>";
	 echo $this->phoneNumber;
 }
}

?>