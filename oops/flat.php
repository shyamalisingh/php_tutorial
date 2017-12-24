<?php

class Flat{
	private $area;
	private $flore;
	private $type;
	
	public function calculate_price()
	{
		echo "<br>";
		echo "calculating price of flat " .$this->area. " flore number of flat " .$this->flore. " type of flat " .$this->type;
		echo "<br>";
	}
	
	public function __construct($area,$flore,$type){
		
		$this->area=$area;
		$this->flore=$flore;
		$this->type=$type;
		echo "<br>";
	}
}
?>