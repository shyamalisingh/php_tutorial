<?php
class Patient{
	private $name;
	private $age;
	private $admit_date;
	private $discharge_date;
	
		public function __construct($name,$age,$admit_date)
		
	{
	 
		$this->name=$name;
		$this->age=$age;
		$this->admit_date=$admit_date;
	
		
	 }
		
			public function set_discharge_date($discharge_date)
			{
				$this->discharge_date=$discharge_date;
			}
			public function patient_info()
			{
				echo "<br>$this->name<br>$this->age<br>$this->admit_date";
			}
		
}
?>