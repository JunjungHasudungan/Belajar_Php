<?php 	

	class Human
	{

		private $name, $age;
		private $index = 0;


		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
			$this->index += 1;
		}

		public function getInfo()
		{
			$info = "No :{$this->index}<br> Name : {$this->name} <br> 
			Age : {$this->age}<br>";
			return $info;
		}

		public function setInfo($inputName, $inputAge){
			$this->name = $inputName;
			$this->age = $inputAge;
		}
	}

		$human1 = new Human("Retno", 25);
		$human2 = new Human("Hasudungan", 25);
 		echo $human1->getInfo();
		echo "<br>";
		echo $human2->getInfo();
 ?>