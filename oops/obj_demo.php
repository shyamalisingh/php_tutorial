<?php
class Student {
	public $name;
	public $age;
	private $phone_number;
	
	public function student_info()
	{
		echo "student name is =".$this->name;
	}
	
}
$student1= new Student;
echo "<br/>Printing student info first time <br/>";
$student1->student_info();
$student1->name="shyamali";
echo "<br/>Printing student info second time <br/>";
$student1->student_info();
echo "<br/>";
$student2= new Student;
$student2->name="shammi";
echo "<br/>Printing student info third time <br/>";
$student2->student_info();

echo "<br/>";
echo "<br/>";
echo "<br/>";

class Car{
	private $name;//Encapsulation
	private $type;
	private $price;
	private $seat;
	public function drive(){
		echo "<br/> Driving $this->name of type $this->type";
	}
	public function __construct($name,$type){
		$this->name=$name;
		$this->type=$type;
		echo "<br/> Car object created";
	}
}
$lineaCar = new Car("Linea","Sedan");
$lineaCar->drive();
$hundaiCar = new Car("Hyundai","Compact");

$hundaiCar->drive();
?>