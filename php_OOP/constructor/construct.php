<?php 	

	class Father
	{

		public $name, $age;


		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}

		public function getInfo()
		{
			$info = "My Father name is : {$this->name} <br> 
			and him age is : {$this->age}";
			return $info;
		}
	}

		$father = new Father("Retno", "65");
 		echo $father->getInfo();
 ?>