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
$student1->name="shyamali";
$student1->student_info();
echo "<br/>";
$student2= new Student;
$student2->name="shammi";
$student2->student_info();

echo "<br/>";
echo "<br/>";
echo "<br/>";

class Car{
	private $name;
	private $type;
	private $price;
	private $seat;
	public function drive(){
		echo "Self start";
	}
}
$lineaCar = new Car;
$lineaCar->drive();
?>