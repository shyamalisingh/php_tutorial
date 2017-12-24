<?php

 class Phone{
	 protected $phone_name;
	 protected $phone_brand;
	 
	 public function dialing($number)
	 {
		 echo "dial number " .$number. " from dis name "  .$this->phone_name. " of dis brand "  .$this->phone_brand;
		 echo "<br>";
	 }
	 public function __construct($phone_name,$phone_brand){
		$this->phone_name=$phone_name;
		$this->phone_brand=$phone_brand;
		echo "<br/> phone object created";
	}
 
	public function print_info()
	{
		echo "<br>";
		echo "phone name is" .$this->phone_name;
		echo "<br>";
		echo "phone brand is" .$this->phone_brand;
	}
}
 ?>