<?php
class Hospital {
	 private $patients;
	 
	 
	 
	 
	 public function add_patient($patient)
	 {
		 
		 $this->patients[]=$patient;
	 }
	public function show_patient()
	{
		$arrlength=count($this->patients);

			for($x=0;$x<$arrlength;$x++)
		{
			$this->patients[$x]->patient_info();
			echo "<br>";
		}
	}
	 
}
?>
