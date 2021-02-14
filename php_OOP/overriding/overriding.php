<?php 	

	class Father
	{
		public $name, $age;

		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}

		// create getter method
		public function getInfo()
		{
			$fatherInfo =  "{$this->name}, {$this->age}";
			return $fatherInfo;
		}
	}

	class Son extends Father
	{
		public $batch, $major;

		// construct of Son Class
		public function __construct($batch, $major)
		{
			 
		// overriding construct

		}
		// overriding method
		public function getInfoSon()
		{
			// using Father function 
			$parentMethod = "Son :".parent::getInfo();
			return $parentMethod;
		}
	}

	// inizialitation object
	$father = new Father("Retno", "57");
	echo $father->getInfo()."<hr>";
	$son = new Son("Tini", "21");
	echo $son->getInfoSon();
