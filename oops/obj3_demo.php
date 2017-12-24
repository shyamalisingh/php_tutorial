<?php
class Hospital {
	 public $patient_name;
	 public $patient_age;
	 private $admit_date;
	 private $discharge_date;
	 
	 public function patient_info()
	 {
		 echo Patient Details is=".$this->patient_name,.$this->patient_age,.$this->admit_date,.$this->discharge_date";
	 }
}
?>
