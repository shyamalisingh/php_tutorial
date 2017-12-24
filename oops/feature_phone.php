<?php

class Feature_Phone extends Phone{
	
	private $model_number;
	
	public function dialing($number)
	 {
		 echo "dial number " .$number. " from dis name "  .$this->phone_name. " of dis brand "  .$this->phone_brand."by keypad" . " model number is " .$this->model_number;
		 echo "<br>";
	 }
	 public function __construct($model_number,$phone_name,$phone_brand){
		 parent::__construct($phone_name,$phone_brand);
		$this->model_number=$model_number;
		echo "<br/> phone object created";
	
	 }
	public function print_info()
	{
		parent::print_info();
		echo "<br>";
		echo "model numer is " .$this->model_number;
		echo "<br>";
	}

}