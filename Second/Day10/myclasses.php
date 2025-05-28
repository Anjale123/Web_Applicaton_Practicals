<?php

class Student
{
	public $regno;
	public $name;
	public $course;
	
	public function __construct($regno,$name,$course)
	{
		$this->regno=$regno;
		$this->name=$name;
		$this->course=$course;
	}
	public function displayStudent()
	{
		echo $this->regno.",".$this->name.",".$this->course."<br>";
	}
}

$student = new Student("2020/ASP/01","David","CSC");
$student->displayStudent();
echo $student->regno."<br>";


class Person
{
	private $NIC;
	Private $name;
	Private $age;

	
	public function __construct($NIC,$name,$age)
	{
		$this->NIC=$NIC;
		$this->name=$name;
		$this->course=$age;
	}

	public function getNIC()
	{
		return $this->NIC;
	}

	public function setNIC($NIC)
	{
		$this->NIC=$NIC;
	}

	public function getAge()
	{
		return $this->Age;
	}
	public function setAge($age)
	{
		if($age>0){
			$this->age=$age;
		}
		else{
			die("Age should be greater than 0");
		}
		
	}
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	public function displayPerson()
	{
		echo $this->NIC.",".$this->name.",".$this->age."<br>";
	}

	public function retirement(){
		echo "It is depand on my job.";
	}
}

/*$person = new Person();
$person->setNIC("19926615211");
$person->setName("David");
$person->setAge(20);
$person->displayPerson();

//echo $person->name."<br>";
echo $person->getName()."<br>";*/


/**
 * 
 */
class Employee extends Person
{
	private $empId;
	private $salary;
	private $department;
	
	function __construct($empId,$salary,$department,$NIC,$name,$age)
	{
		$this->empId=$empId;
		$this->salary=$salary;
		$this->department=$department;
		parent::__construct($NIC,$name,$age);
	}

	public function displayEmployee()
	{
		echo $this->empId.",".$this->salary.",".$this->department."<br>";
	}
	public function retirement(){
		echo "I can retire at age of 60 to 65";
	}
}

$employee = new Employee("EMP14562",800000,"Bio Science","856116102V","Ram",45);
$employee->displayPerson();
$employee->displayEmployee();
$employee->retirement();



?>

